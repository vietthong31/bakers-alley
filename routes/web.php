<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('product/{product}', 'productDetail');
    Route::get('contact', 'contact');
    Route::get('about', 'about');
    Route::get('add/{id}', 'addToCart')->name('cart.add');
    Route::get('product-type', 'productType');
    Route::match(['get', 'post'], 'checkout', 'checkout')->name('cart.checkout')->middleware('auth');
    Route::get('delete/{id}', 'deleteCart')->name('cart.delete');
});


Route::controller(UserController::class)->group(function () {
    Route::get('signup', 'create');
    Route::post('signup', 'store');
    Route::match(['get', 'post'], 'login', 'login')->name('user.login');
    Route::post('logout', 'logout')->name('user.logout');
});
