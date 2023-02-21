@extends('FrontEnd.layouts.master')
@section('title', 'Murahkom Official | Produk')

@section('content')
    <div class="container">
        <h1>Halaman Produk</h1>

        @foreach ($products as $produk)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><a href="/product/{{ $produk->slug }}">{{ $produk->nama_produk }}</a></h5>

            <p>Category <a href="/category/{{ $produk->category->slug }}">{{ $produk->category->nama_category }}</a></p>
            <p class="card-text">Rp. {{ number_format($produk->harga,0,",",".") }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
