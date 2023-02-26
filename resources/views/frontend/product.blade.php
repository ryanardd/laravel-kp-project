@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <p>Produk</p>
            <h2>Kategori</h2>
          </div>

          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
              <ul class="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Laptop</li>
                <li data-filter=".filter-product">PC</li>
                <li data-filter=".filter-branding">Aksesoris</li>

              </ul><!-- End Portfolio Filters -->
            </div>

            <div class="row gy-3 portfolio-container">

                @foreach ($product as $row)
                    <div class="col-xl-3 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                        <a href="assets/img/hero-img.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/hero-img.png" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">{{ $row->nama_produk }}</a></h4>
                        <div class="lead">
                            Rp. {{ number_format($row->harga, 0, ',', '.') }}
                            </div>
                            <p class="d-flex justify-content-end">$row->category->nama_category</p>
                            <div class="btn btn-dark mt-2 d-flex justify-content-center"><a href="/product/{{ $row->slug }}">Read More</a></div>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                @endforeach

                @foreach ($products as $product)
                    <div class="col-xl-3 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                        <a href="assets/img/hero-img.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/hero-img.png" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">{{ $product->nama_produk }}</a></h4>
                        <div class="lead">
                            Rp. {{ number_format($product->harga, 0, ',', '.') }}
                            </div>
                            <p class="d-flex justify-content-start">{{ $product->category->nama_category }}</p>
                            <p class="d-flex justify-content-end">{{ $product->stok ? 'Stok tersedia' : ''}}</p>
                            <div class="btn btn-dark mt-2 d-flex justify-content-center"><a href="/product/{{ $product->slug }}">Read More</a></div>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                @endforeach

              <div class="col-xl-3 portfolio-item filter-product">
                <div class="portfolio-wrap">
                  <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/hero-img.png" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Acer</a></h4>
                    <div class="lead">
                      Rp. 10.000.000
                    </div>
                    <p class="d-flex justify-content-end">Stok Tersedia</p>
                    <div class="btn btn-dark mt-2 d-flex justify-content-center">Order Now</div>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/hero-img.png" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Lenovo</a></h4>
                    <div class="lead">
                      Rp. 10.000.000
                    </div>
                    <p class="d-flex justify-content-end">Stok Kosong</p>
                    <div class="btn btn-dark mt-2 d-flex justify-content-center">Order Now</div>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 portfolio-item filter-branding">
                <div class="portfolio-wrap">
                  <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/hero-img.png" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Msi</a></h4>
                    <div class="lead">
                      Rp. 10.000.000
                    </div>
                    <p class="d-flex justify-content-end">Stok Tersedia</p>
                    <div class="btn btn-dark mt-2 d-flex justify-content-center">Order Now</div>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->


            </div><!-- End Portfolio Container -->

          </div>

        </div>
      </section><!-- End Portfolio Section -->


      {{-- contoh --}}
      <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfolio</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
       --}}
@endsection

