@extends('FrontEnd.layouts.master')
@section('title', 'Murahkom Official | Produk')

@section('content')
    <div class="container">
        <h1>Halaman Detail Produk</h1>

        {{-- @dd($product) --}}
        @foreach ($product as $produk)
            <h3>{{ $produk->nama_produk }}</h3>
        @endforeach
        <a href="{{ route('product') }}">Back all Produk</a>
    </div>
@endsection
