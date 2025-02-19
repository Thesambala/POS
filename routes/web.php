<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('products.food');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('products.beauty');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('products.homecare');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('products.babykid');
});


Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('user.profile');


Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
