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
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm ml-auto">Back to Product</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="Post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" placeholder="Masukan Nama Produk" id="nama_produk" value="{{ old('nama_produk') }}">
							@error('nama_produk')
							<div class="text-danger mt-2">
                                Nama Produk harus di isi!
                            </div>
							@enderror
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga Produk</label>
                            <input type="number" name="harga" class="form-control" value="{{ old('harga') }}">
                            @error('harga')
							<div class="text-danger mt-2">
                                harga Produk harus di isi!
                            </div>
							@enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi" value="{{ old('harga') }}">Deskripsi Produk</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
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
@endsection
