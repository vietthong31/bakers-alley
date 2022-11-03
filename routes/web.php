<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');

    Route::get('product/{product}', 'productDetail');
    Route::get('product-type/{id?}', 'productType')->name('product.type');

    Route::get('contact', 'contact');
    Route::get('about', 'about')->name('about');

    Route::get('add/{id}', 'addToCart')->name('cart.add');
    Route::match(['get', 'post'], 'checkout', 'checkout')->name('cart.checkout')->middleware('auth');
    Route::get('delete/{id}', 'deleteCart')->name('cart.delete');

    Route::get('addFavor/{id}', 'addToFavor')->name('favor.add')->middleware('auth');
    Route::get('favorite-product', 'favoriteProduct')->name('favoriteProduct')->middleware('auth');
});


Route::controller(UserController::class)->group(function () {
    Route::get('signup', 'create');
    Route::post('signup', 'store');
    Route::match(['get', 'post'], 'login', 'login')->name('user.login');
    Route::post('logout', 'logout')->name('user.logout');
});
