@extends('dashboard.layouts.main')

@section('content')
<div class="panel-header bg-primary-gradient mt-5">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

		</div>
	</div>
</div><div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">From Product</div>
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm ml-auto">Back to product</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="Post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk">Nama Product</label>
                            <input type="text" name="nama_produk" class="form-control" placeholder="Masukan Nama Product" id="nama_produk" value="{{ old('nama_produk') }}">
							@error('nama_produk')
							<div class="text-danger mt-2">
                                Nama Produk harus di isi!
                            </div>
							@enderror
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" disabled readonly>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga Produk</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga Product">
                            @error('harga')
							<div class="text-danger mt-2">
                                Harga produk harus di isi Angka! panjang nilai maksimum 12
                            </div>
							@enderror
                        </div>

                        <div class="form-group">
                            <label for="stok">Stok Produk</label>
                            <input type="text" name="stok" class="form-control" value="{{ old('stok') }}" placeholder="Masukkan Stok Product">
                            @error('stok')
							<div class="text-danger mt-2">
                                Stok produk harus di isi! panjang nilai maksimum 5.
                            </div>
							@enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Produk</label>
                            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                            <trix-editor input="deskripsi"></trix-editor>

                            @error('deskripsi')
							<div class="text-danger mt-2">
                                Deskripsi Produk harus di isi!
                            </div>
							@enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select name="category_id" class="form-control">
                                @foreach ($kategori as $row)
                                    <option value="{{ $row->id }}"> {{ $row->nama_category }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="form-group">
                            <label for="gambar">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control">
                        </div> --}}

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>

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

    title.addEventListener('change', function () {
        fetch('/dashboard/products/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection
