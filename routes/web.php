<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/product', [FrontEndController::class, 'product'])->name('product');
Route::get('/contact-us', [FrontEndController::class, 'kontak'])->name('contact-us');
