<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.home', [
            "product" => Produk::where('is_active', 1)->get()
        ]);
    }

    public function product() {
        // dd(Request('search'));
        $produk = Produk::with('category')->get();
        return view('frontend.product', [
            'all' => $produk,
        ]);
    }

    public function showProduct(Produk $produk)
    {
        $produk->increment('views');
        return view('frontend._detailProduk', [
            "detail" => $produk,
            "images" => Image::with('products')->get()->where('product_id', $produk->id),
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
