<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/home');
    }
    return view('landingpage1');
});

Auth::routes();

//Customer Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'customerHome'])->name('home');
    // Product
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery.show');
    Route::view('/custhome', 'customer/customerHome');
    Route::post('/cart/add/{id}', [ProductController::class, 'addToCart'])->name('cart.add');

    // Cart
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/cart/delete/{rowId}', [CartController::class, 'deleteItem'])->name('cart.delete');
    Route::post('/cart/update/{rowId}', [CartController::class, 'updateQuantity'])->name('cart.update');
    Route::post('/cart/destroy', [CartController::class, 'destroyCart'])->name('cart.destroy');
});


//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin');
});

// Landing Page
Route::view('/landingpage1', 'landingpage1');
Route::view('/landingpage2', 'customer/landingpage2');

Route::view('/payment', 'customer/cart/payment');

Route::view('/profile', 'customer/profile');

Route::get('/profile', function () {
    return view('customer.profile');
})->name('profile');

Route::view('/faq', 'customer/faq');

Route::view('/landingpage0', 'customer/landingpage0');

Route::view('/total', 'customer/total');