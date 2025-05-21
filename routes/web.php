<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/product', 'product');
Route::view('/dashboardadmin', 'dashboardadmin');
