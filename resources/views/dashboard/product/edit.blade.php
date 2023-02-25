@extends('dashboard.layouts.main')


@section('content')
<div class="panel-header bg-primary-gradient mt-2">
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
						<div class="card-title">Edit Produk</div>
                        <a href="{{ route('products.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="post" action="{{ route('products.update', $produk->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" id="text" value="{{ $produk->nama_produk }}">
							@error('nama_produk')
							<div class="text-danger">
                                Nama Produk harus di isi!
                            </div>
							@enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Body</label>
                            <textarea name="deskripsi" id="paw" class="form-control">{{ $produk->deskripsi }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="Kategori">Kategori</label>
                            <select name="category_id" class="form-control">
                                @foreach ($kategori as $row)
                                <option value="{{ $row -> id }}" {{ $row->nama_category === $produk->category->nama_category ? 'selected' : '' }}>{{ $row->nama_category }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1" {{ $produk->is_active == '1' ? 'selected' : ''}}>
                                    Publish
                                </option>
                                <option value="0" {{ $produk->is_active == '0' ? 'selected' : ''}}>Draft</option>
                            </select>
                        </div>

                        {{-- <div class="form-group">
                            <label for="gambar">Gambar Artikel</label>
                            <input type="file" name="gambar_artikel" class="form-control">
                            <br>
                            <label for="gambar">Gambar Saat Ini</label><br>
                            <img src=" {{ $produk->gambar }}" alt="Gambar" width="300">
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
@endsection
