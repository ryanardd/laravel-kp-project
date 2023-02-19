<?php

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

Route::get('/slide', function () {
    return view('dashboard/slide');
});

// Client
Route::get('/home', function () {
    return view('home');
});




