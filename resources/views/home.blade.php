@extends('layouts/main')
@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">New Arrival<br>get Buy</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="300">
                    </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Jek Anget<br>Ndang Tukuo Cok</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur
                        eveniet. Eum quas beatae cumque eum quaerat.</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="300">
                    </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Opo Maneh<br>Ndang Gasss</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur
                        eveniet. Eum quas beatae cumque eum quaerat.</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                    </div>
                        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                            <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out"
                            data-aos-delay="300">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
          </div>
    </section>
        <!-- End Hero Section -->

    {{-- service --}}
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Service Us</h2>
                <p>Learn More <span>Service Us</span></p>
            </div>
            <div class="row ">

                <div class="col-xl why-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box p-2 d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-patch-check"></i>
                        <h4>Pelayanan Terbaik</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl why-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box p-2 d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-gem"></i>
                        <h4>Produk Bermutu</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl why-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box p-2 d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-percent"></i>
                        <h4>Harga Kompetitif</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                </div><!-- End Icon Box -->
            </div>
        </div>
    </section>
    {{-- end service --}}

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>About Us</h2>
                <p>Learn More <span>About Us</span></p>
            </div>
            <div class="row gy-4 p-2">
                <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;"
                    data-aos="fade-up" data-aos-delay="150">
                    <div class="call-us position-absolute">
                        <h4>Book a Table</h4>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                                nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </p>

                        <div class="position-relative mt-4">
                            <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->


    {{-- recommendation --}}
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Produk</h2>
            <p>Rekomendasi <span>Untuk Anda</span></p>
          </div>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="all">

              {{-- Items --}}
              <div class="row gy-5">

                <div class="col-lg-4 menu-item">
                  <a href="" class="">
                    <img src="assets/img/hero-img.png" class="menu-img img-fluid" alt="">
                  </a>
                    <h4>Acer</h4>
                    <p class="ingredients text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sunt.</p>
                    <p class="price">
                      Rp.10.000.000
                    </p>
                </div>

                <div class="col-lg-4 menu-item">
                  <a href="" class="">
                    <img src="assets/img/hero-img.png" class="menu-img img-fluid" alt="laptop">
                  </a>
                    <h4>Acer</h4>
                    <p class="ingredients text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sunt.</p>
                    <p class="price">
                      Rp.10.000.000
                    </p>
                </div>

                <div class="col-lg-4 menu-item">
                  <a href="" class="">
                    <img src="assets/img/hero-img.png" class="menu-img img-fluid" alt="laptop">
                  </a>
                    <h4>Acer</h4>
                    <p class="ingredients text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sunt.</p>
                    <p class="price">
                      Rp.10.000.000
                    </p>
                </div>

              </div>
              {{-- end Items --}}
              <div class="mt-5 d-flex justify-content-center">
                <a href="/product" class="btn btn-info">Lihat Produk Lainnya</a>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- end recommendation --}}


    {{-- testimonials --}}
    <section id="testimonials" class="testimonials">
        <div class="container p-2" data-aos="fade-up">

          <div class="section-header">
            <h2>Testimonials</h2>
            <p>Apa Kata Mereka <span>Tentang Kami</span></p>
          </div>

          <div class="slides-1 swiper p-2" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item ">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Marjan</h3>
                        <h4>Tukang Becak</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section>
    {{-- end testimonials --}}

@endsection
