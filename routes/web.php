<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProdukController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('dashboard/login');
});

Route::get('/dashboard', function () {
    return view('dashboard/landing');
});

Route::get('/form', function () {
    return view('dashboard/form');
});

Route::get('/post', function () {
    return view('dashboard/post');
});

Route::get('/category', function () {
    return view('dashboard/category');
});

// Route::get('/slide', function () {
//     return view('dashboard/slide');
// });

// Client
Route::get('/home', function () {
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

// Route::get('/', [FrontEndController::class, 'index'])->name('home');
// Route::get('/contact-us', [FrontEndController::class, 'contactUs'])->name('contact-us');

Route::get('/product', [FrontEndController::class, 'product'])->name('product');

// halaman detail product
Route::get('/product/{produk:slug}', [FrontEndController::class, 'showProduct']);

// halaman category
Route::get('category/', [FrontEndController::class, 'category']);

// halaman category produk
Route::get('category/{category:slug}', [FrontEndController::class, 'showCategory']);
