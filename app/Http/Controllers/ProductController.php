<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Request('search'));
        return view('dashboard.product.index', [
            'product' => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create', [
            'kategori' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required|digits_between:1,12',
            'stok' => 'required|digits_between:1,5',
            'deskripsi' => 'required',
            'is_active' => 'required',
            'category_id' => 'required'
        ]);
        $validateData['views'] = 0;
        $validateData['slug'] = Str::slug($request->nama_produk);

        // dd($data);
        Produk::create($validateData);

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Tersimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Produk::find($id);
        $kategori = Category::all();

        return view('dashboard.product.edit', [
            'produk' => $product,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required|digits_between:1,12',
            'stok' => 'required|digits_between:1,5',
            'deskripsi' => 'required',
            'is_active' => 'required',
            'category_id' => 'required'
        ]);
        $validateData['views'] = 0;
        $validateData['slug'] = Str::slug($request->nama_produk);

        $produk = Produk::find($id);
        $produk->update($validateData);

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil di Update!']);

        // if(empty($request->file('gambar_produk'))){

        //     $produk = Produk::find($id);
        //     $produk->update([
        //         'nama_produk' => $request->nama_produk,
        //         'slug' => Str::slug($request->nama_produk),
        //         'harga' => $request->harga,
        //         'stok' => $request->stok,
        //         'deskripsi' => $request->deskripsi,
        //         'category_id' => $request->category_id,
        //         'is_active' => $request->is_active,
        //     ]);

        //     return redirect()->route('products.index')->with(['success' => 'Data Berhasil di Update!']);
        // } else {
        //     $produk = Produk::find($id);
        //     // Storage::delete($produk->gambar_produk);
        //     $produk -> update([
        //         'nama_produk' => $request->nama_produk,
        //         'slug' => Str::slug($request->nama_produk),
        //         'harga' => $request->harga,
        //         'stok' => $request->stok,
        //         'deskripsi' => strip_tags('required'),
        //         'category_id' => $request->category_id,
        //         'is_active' => $request->is_active,
        //         'gambar_artikel' => $request -> file('gambar_artikel')->store('img/artikel')
        //     ]);
        //     return redirect()->route('products.index')->with(['success' => 'Data Berhasil di Update!']);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);

        $produk->delete();
        return redirect(route('products.index'))->with(['success' => 'Data Berhasil Terhapus!']);
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Produk::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}
