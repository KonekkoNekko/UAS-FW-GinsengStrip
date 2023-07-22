<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

// Customer Routes
Route::view('/view_product', 'customer/products_catalogue');
Route::resource('cart', CartController::class);

// Admin Routes
Route::resource('products', ProductController::class);
Route::resource('transactions', TransactionController::class);
