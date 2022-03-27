<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\ProductController;
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

// Category 
Route::get('/list-categories', [CategoryController::class, 'list_categories']);
Route::get('/delete-category/{category_id}', [CategoryController::class, 'delete_category']);
Route::post('/add-category', [CategoryController::class, 'add_category']);
Route::post('/update-category', [CategoryController::class, 'update_category']);

Route::get('/active-category/{category_id}', [CategoryController::class, 'active_category']);
Route::get('/unactive-category/{category_id}', [CategoryController::class, 'unactive_category']);

// Brand Product
Route::get('/list-brands', [BrandProduct::class, 'list_brands']);
Route::get('/delete-brand/{brand_id}', [BrandProduct::class, 'delete_brand']);
Route::post('/add-brand', [BrandProduct::class, 'add_brand']);
Route::post('/update-brand', [BrandProduct::class, 'update_brand']);

Route::get('/active-brand/{brand_id}', [BrandProduct::class, 'active_brand']);
Route::get('/unactive-brand/{brand_id}', [BrandProduct::class, 'unactive_brand']);

// Product
Route::get('/list-products', [ProductController::class, 'list_products']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::post('/add-product', [ProductController::class, 'add_product']);
Route::post('/update-product', [ProductController::class, 'update_product']);

Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
