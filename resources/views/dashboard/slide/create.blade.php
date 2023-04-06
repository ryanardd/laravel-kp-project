@extends('/dashboard/layouts/main')

@section('content')
    <br><br>
    <div class="panel-header bg-primary-gradient">
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
                            <div class="card-title">Form Create Slide</div>
                            <a href="{{ route('slide.index') }}" class="btn btn-primary btn-sm ml-auto">Back to slide</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('slide.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul Slide</label>
                                <input type="text" name="judul_slide" class="form-control" id="judul"
                                    placeholder="Masukan Judul Artikel" value="{{ old('judul_slide') }}">
                                @error('judul_slide')
                                    <div class="text-danger mt-2">Mohon diisi, Judul tidak boleh kosong!</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar Slide</label>
                                <input type="file" name="gambar_slide" class="form-control">
                                @error('judul_slide')
                                    <div class="text-danger mt-2">Gambar tidak boleh kosong!</div>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                            <label for="is_active">Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
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
