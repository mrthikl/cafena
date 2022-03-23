<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;
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

// frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);


// backend
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/login', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class, 'logout']);

// Category Product 
Route::get('/list-category-product', [CategoryProduct::class, 'list_category_product']);
Route::get('/delete-category-product/{category_id}', [CategoryProduct::class, 'delete_category_product']);
Route::post('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::post('/update-category-product', [CategoryProduct::class, 'update_category_product']);

Route::get('/active-category-product/{category_id}', [CategoryProduct::class, 'active_category_product']);
Route::get('/unactive-category-product/{category_id}', [CategoryProduct::class, 'unactive_category_product']);

// Brand Product
Route::get('/list-brand-product', [BrandProduct::class, 'list_brand_product']);
Route::get('/delete-brand-product/{brand_id}', [BrandProduct::class, 'delete_brand_product']);
Route::post('/add-brand-product', [BrandProduct::class, 'add_brand_product']);
Route::post('/update-brand-product', [BrandProduct::class, 'update_brand_product']);

Route::get('/active-brand-product/{brand_id}', [BrandProduct::class, 'active_brand_product']);
Route::get('/unactive-brand-product/{brand_id}', [BrandProduct::class, 'unactive_brand_product']);
