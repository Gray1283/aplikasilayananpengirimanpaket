<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/product', 'product');
Route::view('/dashboardadmin', 'dashboardadmin');
Route::view('/auth', 'auth');
Route::view('/login', 'auth')->name('login');
Route::view('/register', 'auth')->name('register');
Route::view('/orders', 'orders');

