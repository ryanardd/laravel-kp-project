<?php

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\SlideController;
use App\Models\Slide;

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

// halaman home
Route::get('/', [FrontEndController::class, 'index'])->name('home');

// halaman all product
Route::get('/product', [FrontEndController::class, 'product'])->name('product');

// halaman detail product
Route::get('/product/{produk:slug}', [FrontEndController::class, 'showProduct'])->name('detail-product');

// halaman filter product category
Route::get('/product-category/{category:slug}', [FrontEndController::class, 'productCategory'])->name('product-category');

// halaman contact
Route::get('/contact-us', [FrontEndController::class, 'contactUs'])->name('contact-us');

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman dashboard
Route::get('/dashboard', function()
{
    return view('dashboard.index', [
        'status_produk' => Produk::all()->where('is_active', 0),

        'products' => Produk::count(),
        'categories' => Category::count(),
        'slides' => Slide::count(),
    ]);
})->middleware('auth')->name('dashboard');

// halaman dashboard product
Route::resource('/dashboard/products', ProductController::class)->middleware('auth');
Route::delete('/dashboard/products/deleteimage/{id}', [ProductController::class, 'deleteimage'])->middleware('auth');
Route::delete('/dashboard/products/deletecover/{id}', [ProductController::class, 'deletecover'])->middleware('auth');

// halaman dashboard category
Route::resource('/dashboard/categories', CategoryController::class)->middleware('auth');

// halaman dashboard slide
Route::resource('/dashboard/slide', SlideController::class)->middleware('auth');
