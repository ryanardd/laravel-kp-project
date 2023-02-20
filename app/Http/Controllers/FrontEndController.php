<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('home');
    }

    public function product() {
        return view('produk', [
            "products" => Produk::all(),
        ]);
    }

    public function show_product(Produk $produk)
    {
        return view('detail-product', [
            "product" => $produk::all()
        ]);
    }

    public function kontak() {
        return view('kontak');
    }
}
