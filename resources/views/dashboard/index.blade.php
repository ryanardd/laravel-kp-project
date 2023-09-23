@extends('dashboard/layouts/main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-dark pb-2">Welcossssme bacssssk, {{ auth()->user()->name }}</h2>
            </div>
            <div class="row group-list">
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats bg-primary-gradient card-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">All Product</p>
                                        <h4 class="card-title">{{ $products }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats bg-success-gradient card-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="fas fa-tag"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">All Category</p>
                                        <h4 class="card-title">{{ $categories }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats bg-secondary-gradient card-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Slide</p>
                                        <h4 class="card-title">{{ $slides }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Draft Product --}}
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <h4 class="card-title">Draft Product</h4>
                                <div class="card-tools">
                                    <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span
                                            class="fa fa-sync-alt"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table-bordered table-hover table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                            <th>Gambar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($status_produk as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->nama_produk }}</td>
                                                <td>Rp. {{ number_format($row->harga, 0, ',', '.') }}</td>
                                                <td>{{ $row->category->nama_category }}</td>
                                                <td>{{ $row->is_active ? 'Active' : 'Draft' }}</td>
                                                <td><img src="/images/cover/{{ $row->thumbnail }}" class="img-responsive"
                                                        style="max-height:100px; max-width:100px;" alt=""></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-dark bg-white text-center">Data Masih Kosong
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
