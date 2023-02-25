<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontEndController;

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

// Halaman dashboard
Route::get('/dashboard', function()
{
    return view('dashboard.index', [

        'produk' => Produk::all()->where('is_active', 0)
    ]);
})->middleware('auth');


Route::resource('/dashbord/products', ProductController::class);
