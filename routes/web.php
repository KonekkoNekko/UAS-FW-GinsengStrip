<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/home');
    }
    return view('landingpage0');
})->name('beginning');

Auth::routes();

//Customer Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'customerHome'])->name('home');
    Route::get('/profile', [HomeController::class, 'profileview'])->name('profile');
    Route::delete('/delete-account', [HomeController::class, 'deleteAccount'])->name('delete-account');
    // Product
    Route::get('/product', [ProductController::class, 'index'])->name('product');


    Route::view('/custhome', 'customer/customerHome');
    Route::post('/cart/add/{id}', [ProductController::class, 'addToCart'])->name('cart.add');

    // Cart
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/cart/delete/{rowId}', [CartController::class, 'deleteItem'])->name('cart.delete');
    Route::post('/cart/update/{rowId}', [CartController::class, 'updateQuantity'])->name('cart.update');
    Route::post('/cart/destroy', [CartController::class, 'destroyCart'])->name('cart.destroy');
    Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery.show');
    Route::post('/delivery/store', [DeliveryController::class, 'store'])->name('delivery.store');
    Route::get('/totalpayment', [PaymentController::class, 'showtotal'])->name('payment.showtotal');
    Route::post('/totalpayment/store', [PaymentController::class, 'storetotal'])->name('payment.storetotal');
});


//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin');
    Route::resource('/productadms', ProductAdminController::class);
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transc.index');
    Route::get('/transactions/edit/{id}', [TransactionController::class, 'edit'])->name('transc.edit');
    Route::post('/transactions/update/{id}', [TransactionController::class, 'update'])->name('transc.update');
    Route::delete('/transactions/delete/{id}', [TransactionController::class, 'destroy'])->name('transc.delete');
    Route::get('/open-google-maps/{coordinate}', function ($coordinate) {
        // Extract the latitude and longitude from the coordinate
        list($latitude, $longitude) = explode(',', $coordinate);

        // Construct the Google Maps URL
        $googleMapsUrl = "https://www.google.com/maps?q={$latitude},{$longitude}";

        // Redirect the user to the Google Maps URL
        return Redirect::away($googleMapsUrl);
    })->name('openGoogleMaps');
});


// Landing Page
Route::view('/landingpage1', 'landingpage1');
Route::view('/landingpage2', 'customer/landingpage2');

Route::view('/payment', 'customer/cart/payment');

Route::view('/faq', 'customer/faq');
