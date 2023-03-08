@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p>Produk</p>
                <h2>Kategori</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div>
                    <ul class="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Laptop</li>
                        <li data-filter=".filter-product">PC</li>
                    </ul><!-- End Portfolio Filters -->
                </div>

                <div class="row gy-3 portfolio-container">

                    @foreach ($laptop as $row)
                        <div class="col-xl-3 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="images/cover/{{ $row->thumbnail }}" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="images/cover/{{ $row->thumbnail }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">{{ $row->nama_produk }}</a>
                                    </h4>
                                    <div class="lead">
                                        Rp. {{ number_format($row->harga, 0, ',', '.') }}
                                    </div>
                                    <p class="d-flex justify-content-start">{{ $row->category->nama_category }}</p>
                                    <p class="d-flex justify-content-end">{{ $row->stok ? 'Stok tersedia' : '' }}</p>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a
                                            href="/product/{{ $row->slug }}">Read More</a></div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach

                    @foreach ($pc as $product)
                        <div class="col-xl-3 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="/cover/{{ $product->thumbnail }}" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="/cover/{{ $product->thumbnail }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html"
                                            title="More Details">{{ $product->nama_produk }}</a></h4>
                                    <div class="lead">
                                        Rp. {{ number_format($product->harga, 0, ',', '.') }}
                                    </div>
                                    <p class="d-flex justify-content-start">{{ $product->category->nama_category }}</p>
                                    <p class="d-flex justify-content-end">{{ $product->stok ? 'Stok tersedia' : '' }}</p>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a
                                            href="/product/{{ $product->slug }}">Read More</a></div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
