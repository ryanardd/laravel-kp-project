@extends('FrontEnd.layouts.master')
@section('title', 'Murahkom Official | Produk')

@section('content')
    <div class="container">

        <h1>{{ $detail->nama_produk }}</h1>
        <p>{{ $detail->deskripsi }}</p>
        
        <a href="{{ route('product') }}">Back all Produk</a>
    </div>
@endsection
