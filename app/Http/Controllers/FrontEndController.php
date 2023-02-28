<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.home', [
            "product" => Produk::where('is_active', 1)->get()
        ]);
    }

    public function product(Category $category) {
        return view('frontend.product', [
            "products" => Produk::where('is_active', 1)->with('category')->latest()->get(),
            "product" => $category->product->load('category')
        ]);
    }

    public function showProduct(Produk $produk)
    {
        // @dd($produk);
        return view('frontend._detailProduk', [
            "detail" => $produk
        ]);
    }

    public function showCategory(Category $category){
        // @dd($category);
        return view('FrontEnd.category', [
            "category" => $category->nama_category,
            "product" => $category->product->load('category')
        ]);
    }

    public function contactUs() {
        return view('frontend.contact');
    }
}
