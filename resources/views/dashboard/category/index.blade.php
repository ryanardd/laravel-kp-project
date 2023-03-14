@extends('dashboard.layouts.main')

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
                        <a href="{{ route('categories.index') }}">Category</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="align-items-center">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm ml-auto">
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
                                            <th>Nama Kategori</th>
                                            <th>Slug</th>
                                            <th>Jumlah Product</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kategori as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->nama_category }}</td>
                                                <td>{{ $row->slug }}</td>
                                                <td>{{ $products }}</td>
                                                <td>
                                                    <a href="{{ route('categories.edit', $row->id) }}"
                                                        class="btn btn-success btn-sm mr-2"><i class="fas fa-pen"></i></a>
                                                    <form action="{{ route('categories.destroy', $row->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('yakin ingin menghapus?')">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
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
