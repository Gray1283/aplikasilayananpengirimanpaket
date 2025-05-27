<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::view('/homepage', 'homepage');
Route::view('/product', 'product');
Route::view('/dashboardadmin', 'dashboardadmin');
Route::view('/auth', 'auth');
Route::view('/login', 'auth');
Route::view('/register', 'auth');
Route::view('/orders', 'orders');
Route::view('/welcome', 'welcome');