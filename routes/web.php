<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/seed', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);