<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index', ['products' => Product::all()->sortByDesc('id')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product, 'types' => TypeProduct::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->promotion_price);
        $attributes = $request->validate([
            'id_type' => 'required|exists:type_products,id',
            'description' => 'required',
            'unit_price' => 'required|numeric|min_digits:4',
            'promotion_price' => ['numeric', 'min:0', 'lt:unit_price', Rule::when($request->promotion_price > 0, 'min_digits: 4')],
            'unit' => 'required',
            'new' => 'required|min:0|max:1',
            'image' => 'image'
        ]);
        // dd($attributes);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = 'product-' . date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $attributes['image'] = $fileName;
            $file->move(public_path('assets/dest/images/products'), $fileName);
        }
        $product->update($attributes);
        return redirect()->route('product.index')->with('success', "Updated product $product->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $imagePath = public_path('assets/dest/images/' . $product->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $product->delete();
        return redirect()->route('product.index')->with('success', "Đã xóa $product->name");
    }
}
