@extends('FrontEnd.layouts.master');

@section('content');
    <h1>Category {{ $category->nama_category }}</h1>
    {{-- @dd($product); --}}
    @foreach ($product as $item)
        <h3>{{ $item->nama_produk }}</h3>
        <p>{{ $item->deskripsi }}</p>
    @endforeach

    <a href="{{ route('product') }}">Back To Product</a>
@endsection
