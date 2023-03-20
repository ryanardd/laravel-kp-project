{{-- @dd($all) --}}
@extends('frontend.layouts.main')
@section('title', 'Product Category - Murahkom Toko Komputer Online Termurah di Surabaya')
@section('container')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p>Produk</p>
            </div>

            <div class="search">
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                        <g>
                            <path
                                d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                            </path>
                        </g>
                    </svg>
                    <form action="">
                        <input placeholder="Search" type="search" class="input" name="search"
                            value="{{ request('search') }}">
                    </form>
                </div>
            </div>

            {{-- @dd($category) --}}
            @if ($all->count() > 0)
                <div class="portfolio-isotope" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-3 portfolio-container">

                        @foreach ($all as $row)
                            <div class="col-xl-3 portfolio-item">
                                <div class="portfolio-wrap">
                                    <a href="{{ route('product') }}/{{ $row->slug }}"
                                        class="d-flex justify-content-center"><img src="/images/cover/{{ $row->thumbnail }}"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h5><a href="{{ route('product') }}/{{ $row->slug }}"
                                                title="More Details">{{ $row->nama_produk }}</a>
                                        </h5>

                                        <div class="mt-3">
                                            <div class="col d-flex justify-content-between">
                                                <div class="lead fw-bold">
                                                    Rp. {{ number_format($row->harga, 0, ',', '.') }}
                                                </div>
                                                <p class="rounded-1 p-1">
                                                    {{ $row->category->nama_category }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div>
                    <div class="paginate_button justify-content-end">
                        {{ $all->links() }}
                    </div>
                </div>
            @else
                <p class="fs-4 text-center">Produk Masih Kosong!</p>
            @endif

        </div>

    </section><!-- End Portfolio Section -->
@endsection
