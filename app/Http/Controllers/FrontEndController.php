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

    public function product(Category $category) {
        // dd(Request('search'));

        return view('frontend.product', [
            "all" => Produk::where('is_active', 1)->with('category')->latest()->filter(request(['search']))->paginate(5),
            "laptop" => Produk::where('category_id', 1)->with('category')->latest()->filter(request(['search']))->simplePaginate(5),
            "pc" => Produk::where('category_id', 2)->with('category')->latest()->filter(request(['search']))->simplePaginate(5),
        ]);
    }

    public function showProduct(Produk $produk)
    {
        // @dd($produk);
        return view('frontend._detailProduk', [
            "detail" => $produk,
            "images" => Image::all()
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
