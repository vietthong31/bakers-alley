<?php

// Route::resource('admin', AdminController::class)->middleware('auth.admin');

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\UserController;

Route::match(['get', 'post'], '/login', [AdminController::class, 'login'])->name('admin.login');
Route::middleware('auth.admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::resource('user', UserController::class);
    Route::resource('type', TypeProductController::class);
    Route::resource('product', ProductController::class);
    Route::resource('bill', BillController::class);
    Route::resource('slide', SlideController::class);
});
