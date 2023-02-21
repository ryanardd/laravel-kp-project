<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('FrontEnd.home');
    }

    public function product() {
        return view('FrontEnd.produk', [
            "products" => Produk::all(),
        ]);
    }

    public function showProduct(Produk $produk)
    {
        // @dd($produk);
        return view('FrontEnd.detail-product', [
            "detail" => $produk
        ]);
    }

    public function showCategory(Category $category){
        // @dd($category);
        return view('FrontEnd.category', [
            "category" => $category,
            "product" => $category->product
        ]);
    }

    public function contactUs() {
        return view('FrontEnd.kontak');
    }
}
