@extends('/dashboard/layouts/main')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">List Data</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="/dashboard">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('slide.index') }}">Slide</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="align-items-center">
                                <a href="{{ route('slide.create') }}" class="btn btn-primary btn-sm ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Create data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="alert alert-primary">
                                    {{ Session('success') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table id="myTable" class="display table table-striped table-hover text-center border">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Slide</th>
                                            {{-- <th>Status</th> --}}
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($slide as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->judul_slide }}</td>
                                                {{-- <td>
                                                    @if ($row->is_active == '1')
                                                        active
                                                    @else
                                                        Draft
                                                    @endif
                                                </td> --}}
                                                <td><img src="/images/slide/{{ $row->gambar_slide }}" class="img-responsive"
                                                        style="max-height:100px; max-width:100px;" alt=""></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <form action="{{ route('slide.destroy', $row->id) }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center bg-white text-dark">Data Masih Kosong
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
