<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'pages.homepage')->name('home');
Route::view('/products', 'pages.product-catalog')->name('product-catalog');
Route::view('/product', 'pages.product')->name('product');
Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/order-confirmed', 'pages.order-confirmed')->name('order-confirmed');
Route::view('/page', 'pages.page')->name('page');

// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/navigation', function () {
    return view('pages.page');
});

Route::get('/navigation', function () {
    return view('nama_blade_anda');
});

