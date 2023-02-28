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


Route::get('/', [FrontEndController::class, 'index'])->name('home');
// Route::get('/contact-us', [FrontEndController::class, 'contactUs'])->name('contact-us');

Route::get('/product', [FrontEndController::class, 'product'])->name('product');

// halaman contact
Route::get('/contact-us', [FrontEndController::class, 'contactUs']);

// halaman detail product
Route::get('/product/{produk:slug}', [FrontEndController::class, 'showProduct']);


// // halaman category
// Route::get('category/', [FrontEndController::class, 'category']);

// halaman category produk
Route::get('category/{category:slug}', [FrontEndController::class, 'showCategory']);

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// route menangani slug otomatis
Route::get('/dashboard/products/checkSlug', [ProductController::class, 'checkSlug'])->middleware('auth');

// Halaman dashboard
Route::get('/dashboard', function()
{
    return view('dashboard.index', [
        'status_produk' => Produk::all()->where('is_active', 0),
        'status_slide' => Slide::all()->where('is_active', 0),

        'products' => Produk::count(),
        'categories' => Category::count(),
        'slides' => Slide::count(),
    ]);
})->middleware('auth');

// halaman dashboard product
Route::resource('/dashbord/products', ProductController::class);

// halaman dashboard category
Route::resource('/dashboard/categories', CategoryController::class);

// halaman dashboard slide
Route::resource('/dashboard/slide', SlideController::class);
