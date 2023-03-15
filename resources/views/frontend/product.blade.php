@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p>Produk</p>
                <h2>Kategori</h2>
            </div>

            {{-- <div class="search">
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
            </div> --}}

            {{-- @dd($category) --}}
            {{-- @if ($product->count()) --}}
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <ul class="portfolio-flters">
                        @foreach ($category as $cat)
                            <li data-filter=".filter-product"><a
                                    href="/category/{{ $cat->slug }}">{{ $cat->nama_category }}</a>
                            </li>
                        @endforeach
                    </ul><!-- End Portfolio Filters -->
                </div>
                {{-- <div class="row gy-3 portfolio-container">
                    @foreach ($category as $cat)
                        <div class="col-xl-3 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="images/cover/" class="glightbox d-flex justify-content-center"><img
                                        src="images/cover/" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">{{ $cat->nama_category }}</a>
                                    </h4>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a
                                            href="/category/{{ $cat->slug }}">Read More</a></div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div> --}}
                {{-- <div class="row gy-5 p-2">
                    @foreach ($category as $cat)
                        <div class="col-lg-4">
                            <div class="category p-2">
                                <a href="" class="">
                                    <img src="images/cover/" class="menu-img img-fluid" alt="">
                                </a>
                                <a href="/product/">
                                    <h4>{{ $cat->nama_category }}</h4>
                                </a>
                                <div class="d-flex justify-content-center mt-2"><a class="btn read-more"
                                        href="/category/{{ $cat->slug }}">Read
                                        More</a></div>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
                <div class="row gy-3 portfolio-container">
                    @foreach ($pc as $product)
                        <div class="col-xl-3 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="images/cover/{{ $product->thumbnail }}" data-gallery="portfolio-gallery-app"
                                    class="glightbox d-flex justify-content-center"><img
                                        src="images/cover/{{ $product->thumbnail }}" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html"
                                            title="More Details">{{ $product->nama_produk }}</a></h4>
                                    <div class="lead">
                                        Rp. {{ number_format($product->harga, 0, ',', '.') }}
                                    </div>
                                    <p class="d-flex justify-content-start">{{ $product->category->nama_category }}</p>
                                    <p class="d-flex justify-content-end">{{ $product->stok ? 'Stok tersedia' : '' }}
                                    </p>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a
                                            href="/product/{{ $product->slug }}">Read More</a></div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>
            {{-- @else
                <p class="fs-4 text-center">Not Found</p>
            @endif --}}

        </div>

    </section><!-- End Portfolio Section -->
@endsection
