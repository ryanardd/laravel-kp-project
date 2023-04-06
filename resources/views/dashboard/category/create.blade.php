@extends('.dashboard.layouts.main')

@section('content')
    <div class="panel-header bg-primary-gradient mt-5">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            </div>
        </div>
    </div>
    <div class="create page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Form Category</div>
                            <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm ml-auto">Back to
                                category</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('categories.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="category">Nama Category</label>
                                <input type="text" name="nama_category" class="form-control" id="category"
                                    placeholder="Masukkan nama kategory" value="{{ old('nama_category') }}">
                                @error('nama_category')
                                    <div class="text-danger mt-2">Nama Kategori tidak boleh kosong!</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
