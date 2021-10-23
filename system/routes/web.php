<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Template E-Commerce

Route::get('/home', function () {
    return view('ecommerce.home');
});

Route::get('/about', function () {
    return view('ecommerce.about');
});

Route::get('/checkout', function () {
    return view('ecommerce.checkout');
});

Route::get('/contact', function () {
    return view('ecommerce.contact');
});

Route::get('/login', function () {
    return view('ecommerce.login');
});

Route::get('/register', function () {
    return view('ecommerce.register');
});

Route::get('/sales', function () {
    return view('ecommerce.sales');
});

Route::get('/single', function () {
    return view('ecommerce.single');
});

// template admin
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/profile', function () {
    return view('profile');
});