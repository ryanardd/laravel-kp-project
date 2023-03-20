<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Slide;
use App\Models\Produk;
use App\Models\Category;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.home', [
            "product" => Produk::with('category')->where('is_active', 1)->get(),
            "slides" => Slide::all(),
        ]);
    }

    public function product() {
        // dd(Request('search'));
        $produk = Produk::where('is_active', 1)->with('category')->latest()->filter(request(['search']))->paginate(5);
        return view('frontend.product', [
            'all' => $produk,
        ]);
    }

    public function productCategory($slug)
    {
        // $produk = Category::where('slug', $slug)->first()->product()->filter(request(['search']))->paginate(5);
        $produk = Category::where('slug', $slug)->first()->product()->filter(request(['search']))->paginate(5);
        return view('frontend.product_category', [
            'all' => $produk,
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
