@extends('FrontEnd.layouts.master');

@section('content');
    <h1>Category</h1>
    {{-- @dd($category) --}}
    @foreach ($category as $item)
        <ul>
            <li><a href="category/{{ $item->slug }}">{{ $item->nama_category }}</a></li>
        </ul>
    @endforeach

    <a href="{{ route('product') }}">Back To Product</a>
@endsection
