<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/product/create', function () {
    return view('products.create');
});

Route::get('/product/edit', function () {
    return view('products.edit');
});

Route::get('/product/delete', function () {
    return view('products.delete');
});

Route::get('/order', function() {
    return view('order.index');
});
