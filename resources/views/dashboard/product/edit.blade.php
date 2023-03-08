@extends('dashboard.layouts.main')

@section('content')
    <div class="panel-header bg-primary-gradient mt-5">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Edit Product</div>
                            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm ml-auto">Back to
                                Product</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="Post" action="{{ route('products.update', $produk->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" name="nama_produk" class="form-control"
                                    placeholder="Masukan Nama Produk" id="nama_produk" value="{{ $produk->nama_produk }}">
                                @error('nama_produk')
                                    <div class="text-danger mt-2">
                                        Nama Produk harus di isi!
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-3">
                                <img src="/images/cover/{{ $produk->thumbnail }}" class="img-responsive"
                                    style="max-height: 100px; max-width: 100px;" alt="{{ $produk->thumbnail }}">
                            </div>

                            <div class="form-group">
                                <label for="formImages">Cover Image</label>
                                <input class="form-control" type="file" id="formImages" name="thumbnail">
                            </div>

                            <div class="col-lg-5 d-flex align-items-center border">
                                {{-- @dd($produk->images); --}}
                                @foreach ($images as $gambar)
                                    <img src="/images/image/{{ $gambar->image }}" class="img-responsive"
                                        style="max-height: 100px; max-width: 100px;" alt="{{ $gambar->image }}">

                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="formImages">Images</label>
                                <input class="form-control" type="file" id="formImages" name="image[]" multiple>
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga Produk</label>
                                <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}">
                                @error('harga')
                                    <div class="text-danger mt-2">
                                        harga Produk harus di isi!
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stok">Stok Produk</label>
                                <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}">
                                @error('stok')
                                    <div class="text-danger mt-2">
                                        Stok Produk harus di isi! Max 5 Digit
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Produk</label>
                                <input id="deskripsi" type="hidden" name="deskripsi"
                                    value="{{ old('deskripsi', $produk->deskripsi) }}">
                                <trix-editor input="deskripsi"></trix-editor>

                                @error('deskripsi')
                                    <div class="text-danger mt-2">
                                        Deskripsi Produk harus di isi!
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Kategori">Kategori</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($kategori as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $row->nama_category === $produk->category->nama_category ? 'selected' : '' }}>
                                            {{ $row->nama_category }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" {{ $produk->is_active == '1' ? 'selected' : '' }}>
                                        Publish
                                    </option>
                                    <option value="0" {{ $produk->is_active == '0' ? 'selected' : '' }}>
                                        Draft
                                    </option>
                                </select>
                            </div>

                            {{-- <div class="form-group">
                            <label for="gambar">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control">
                        </div> --}}

                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const title = document.querySelector('#nama_produk');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/products/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
