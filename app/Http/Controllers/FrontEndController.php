<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Slide;
use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.home', [
            "product" => Produk::with('category')->where('is_active', 1)->limit(3)->get(),
            "slides" => Slide::all(),
        ]);
    }

    public function product() {
        // dd(Request('search'));
        $produk = Produk::where('is_active', 1)->with('category')->latest()->filter(request(['search']))->paginate(20);
        return view('frontend.product', [
            'all' => $produk,
        ]);
    }

    public function productCategory($slug)
    {
        $produk = Category::where('slug', $slug)->first()->product()->where('is_active', 1)->filter(request(['search']))->paginate(10);

        // dd($produk);
        return view('frontend.product_category', [
            'all' => $produk,
        ]);
    }

    public function showProduct(Produk $produk)
    {
        $produk->increment('views');
        $populer = Produk::with('category')->orderBy('views', 'DESC')->limit(4)->get();
        // dd($populer);
        return view('frontend._detailProduk', [
            "detail" => $produk,
            "images" => Image::with('products')->get()->where('product_id', $produk->id),
            'populer' => $populer
        ]);
    }

    public function contactUs() {
        return view('frontend.contact');
    }

}
