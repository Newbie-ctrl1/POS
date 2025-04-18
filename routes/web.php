<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// route home index 
Route::get('/', [HomeController::class, 'index'])->name('home');
// product

// route product dengan prefix
Route::prefix('product')->group(function (){
        Route::get('/', [ProductController::class, 'index'])->name('product');
        Route::get('/baby-kids', [ProductController::class, 'babykids']);
        Route::get('/beauty-health', [ProductController::class, 'beautyhealth']);
        Route::get('/food-beverage', [ProductController::class, 'foodbeverage']);
        Route::get('/home-care', [ProductController::class, 'homecare']);
});

// route parameters user
Route::get('/user/{id}/{name}', [UserController::class, 'profile'])->name('profile');

// route untuk sales
Route::get('/sales', [SalesController::class, 'index'])->name('sales');
