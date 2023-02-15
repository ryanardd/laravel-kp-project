<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('home');
    }

    public function produk() {
        return view('produk');
    }

    public function kontak() {
        return view('kontak');
    }
}
