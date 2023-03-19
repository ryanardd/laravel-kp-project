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
        $cat = Category::all();
        return view('frontend.home', [
            "product" => Produk::where('is_active', 1)->get(),
            'category' => $cat
        ]);
    }

    public function product() {
        // dd(Request('search'));
        $produk = Produk::where('is_active', 1)->with('category')->latest()->filter(request(['search']))->paginate(5);
        $cat = Category::all();
        return view('frontend.product', [
            'all' => $produk,
            'category' => $cat
        ]);
    }

    public function showProduct(Produk $produk)
    {
        $produk->increment('views');
        $cat = Category::all();
        return view('frontend._detailProduk', [
            "detail" => $produk,
            "images" => Image::with('products')->get()->where('product_id', $produk->id),
            'category' => $cat
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
        $cat = Category::all();

        return view('frontend.contact',[
            'category' => $cat
        ]);
    }
}
