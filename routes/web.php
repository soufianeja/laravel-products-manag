<?php

use App\Http\Controllers\ProductController;
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

Route::get('/add_product',[ProductController::class, 'add_product']);
Route::get('/add_category',[ProductController::class, 'add_category']);
Route::get('/show_products',[ProductController::class, 'show_products']);
Route::post('/store_category',[ProductController::class, 'store_category']);
Route::post('/store_product',[ProductController::class, 'store_product']);
