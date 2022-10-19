<?php

namespace App\Http\Controllers;

use App\Mail\Checkout;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Cart;
use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function home()
    {
        // dd(session('cart'));
        $newProducts = Product::where('new', '=', 1)->paginate(4, ['*'], 'newProducts')->withQueryString();
        $saleProducts = Product::whereColumn('promotion_price', '<', 'unit_price')
            ->where('promotion_price', '>', 0)
            ->paginate(4, ['*'], 'saleProducts')->withQueryString();

        return view('page.home', [
            'newProducts' => $newProducts,
            'saleProducts' => $saleProducts
        ]);
    }

    public function productDetail(Product $product)
    {
        $relatedProducts = Product::where('id_type', '=', $product->id_type)->where('id', '!=', $product->id)->take(3)->get();
        $groupBills = BillDetail::join('products', 'bill_detail.id_product', '=', 'products.id')->get()->groupBy('id_product');

        $bestSellers = collect([]);

        foreach ($groupBills as $bills) {
            $productName = $bills[0]->name;
            $productPrice = $bills[0]->unit_price;
            $image = $bills[0]->image;
            $bestSellers->push((object)[
                'bestSellers' => $bills->sum('bestSellers'),
                'name' => $productName,
                'price' => $productPrice,
                'image' => $image
            ]);
        }

        $newProducts = Product::all()->where('new', '=', 1)->take(4);

        return view('page.product-detail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'bestSellers' => $bestSellers->take(4),
            'newProducts' => $newProducts
        ]);
    }

    public function about()
    {
        return view('page.about');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function productType()
    {
        return view('page.product-type', [
            'types' => TypeProduct::all(),
            'newProducts' => Product::where('new', '1')->paginate(3)
        ]);
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        // $oldCart = session('cart') ? session('cart') : null;
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function deleteCart(Request $request, $id)
    {
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            session()->put('cart', $cart);
        } else {
            session()->forget('cart');
        }
        return redirect('/');
    }

    public function checkout(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('page.checkout');
        } else {
            if (!session()->has('cart')) {
                return redirect()->route('cart.checkout')->with('message', 'Chưa chọn hàng');
            }
            $user = auth()->user();
            $items = session('cart')->items;
            $attributes = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
                'address' => 'required',
                'phone' => 'required',
                'note' => 'nullable',
                'payment_method' => 'required'
            ]);
            $newBill = Bill::create([
                'id_customer' => $user->id,
                'date_order' => now(),
                'total' => session('cart')->totalPrice,
                'payment' => $attributes['payment_method'],
                'note' => $attributes['note']
            ]);
            foreach ($items as $item) {
                BillDetail::create([
                    'id_bill' => $newBill->id,
                    'id_product' => $item['item']->id,
                    'quantity' => $item['qty'],
                    'unit_price' => $item['price']
                ]);
            }

            // send email
            Mail::to($user->email)->send(new Checkout($user, session('cart')->items));

            session()->forget('cart');
            return redirect('/')->with('message', 'Đặt hàng thành công.');
        }
    }
}
