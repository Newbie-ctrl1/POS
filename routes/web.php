<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\CategoryController;



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
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

// route untuk sales
Route::get('/sales', [SalesController::class, 'index'])->name('sales');

// route LevelController
Route::get('/level', [LevelController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);