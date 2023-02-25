<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.home', [
            "product" => Produk::all()
        ]);
    }

    public function product() {
        return view('product', [
            "products" => Produk::with('category')->latest()->get(),
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
            "category" => $category->nama_category,
            "product" => $category->product->load('category')
        ]);
    }

    public function contactUs() {
        return view('FrontEnd.kontak');
    }
}
