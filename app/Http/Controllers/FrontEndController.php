<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('home');
    }

    public function produk() {
        return view('produk', [
            "produks" => Produk::all()
        ]);
    }

    public function kontak() {
        return view('kontak');
    }
}
