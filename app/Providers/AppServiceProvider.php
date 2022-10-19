<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFour();
        View::composer(['components.header', 'page.checkout'], function ($view) {
            if (session('cart')) {
                $oldCart = session('cart');
                $cart = new Cart($oldCart);
                // dd($cart->items);
                $view->with([
                    'cart' => session('cart'), 'productCarts' => $cart->items,
                    'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty
                ]);
            }
        });
    }
}
