<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Produk;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'product' => Produk::with('category')->get()
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
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required|digits_between:1,12',
            'stok' => 'required|digits_between:1,5',
            'deskripsi' => 'required',
            'is_active' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'required|file|mimes:jpeg,png,jpg,svg|max:5120',
            'cta_tokped' => 'required|url',
            'cta_shopee' => 'required|url'
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move(\public_path('images/cover'), $imageName);

            $produk = new Produk([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi,
                'is_active' => $request->is_active,
                'category_id' => $request->category_id,
                'views' => 0,
                'thumbnail' => $imageName,
                'slug' => Str::slug($request->nama_produk),
                'cta_tokped' => $request->cta_tokped,
                'cta_shopee' => $request->cta_shopee,
            ]);
            // return dd($request);
            $produk->save();
        }

        // $images = array();
        if ($request->hasFile('image')) {
            // $files = $request->file('image');
            foreach ($request->file('image') as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $file->move(\public_path('images/image'), $imageName);
                Image::create([
                    'image' => $imageName,
                    'product_id' => $produk->id,
                ]);
            }
        }

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
        $images = Image::where('product_id', $id)->get();

        return view('dashboard.product.edit', [
            'produk' => $product,
            'kategori' => $kategori,
            'images' => $images
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
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required|digits_between:1,12',
            'stok' => 'required|digits_between:1,5',
            'deskripsi' => 'required',
            'is_active' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'file|mimes:jpeg,png,jpg,svg|max:5120',
            'cta_tokped' => 'required|url',
            'cta_shopee' => 'required|url'
        ]);

        $produk = Produk::find($id);
        if ($request->hasFile('thumbnail')) {
            if (File::exists('images/cover/' . $produk->thumbnail)) {
                File::delete('images/cover/' . $produk->thumbnail);
            }
            $file = $request->file('thumbnail');
            $produk->thumbnail = time() . '-' . $file->getClientOriginalName();
            $file->move(\public_path('images/cover'), $produk->thumbnail);
            $request['thumbnail'] = $produk->thumbnail;
        }

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'is_active' => $request->is_active,
            'category_id' => $request->category_id,
            'thumbnail' => $produk->thumbnail,
            'slug' => Str::slug($request->nama_produk),
            'cta_tokped' => $request->cta_tokped,
            'cta_shopee' => $request->cta_shopee,
        ]);

        $images = Image::where('product_id', $id)->get();
        if ($request->hasFile('image')) {
            // dd($images);
                foreach ($images as $gambar) {
                    if (File::exists('images/image/' . $gambar->image)) {
                        File::delete('images/image/' . $gambar->image);
                        $gambar->delete();
                    }
                }

            foreach ($request->file('image') as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $file->move(\public_path('images/image'), $imageName);
                Image::create   ([
                    'image' => $imageName,
                    'product_id' => $produk->id,
                ]);
            }

        }
        return redirect(route('products.index'))->with(['success' => 'Data Berhasil Terupdate!']);
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
        if (File::exists('images/cover/' . $produk->thumbnail)) {
            File::delete('images/cover/' . $produk->thumbnail);

            $images = Image::where('product_id', $produk->id)->get();
            foreach ($images as $gambar) {
                if (File::exists('images/image/' . $gambar->image)) {
                    File::delete('images/image/' . $gambar->image);
                }
            }
        }
        $produk->delete();
        return redirect(route('products.index'))->with(['success' => 'Data Berhasil Terhapus!']);
    }

    public function deleteimage($id)
    {
        $images = Image::find($id);
        if (File::exists('images/image/' . $images->image)) {
            File::delete('images/image/' . $images->image);
        }
        $images->delete();
        return back();
    }

    public function deletecover($id)
    {
        $cover = Produk::find($id)->thumbnail;
        if (File::exists('images/cover/' . $cover)) {
            File::delete('images/cover/' . $cover);
        }

        return back();
    }
}
