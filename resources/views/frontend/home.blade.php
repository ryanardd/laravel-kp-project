@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="row justify-content-between gy-5">
                            <div
                                class="col-lg-5 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-lg-start order-2 text-center">
                                <h2 data-aos="fade-up">New Arrival<br>get Buy</h2>
                                <p data-aos="fade-up" data-aos-delay="100">
                                    Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae
                                    cumque eum quaerat.</p>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                                </div>
                            </div>
                            <div class="col-lg-5 order-lg-2 text-lg-start order-1 text-center">
                                <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out"
                                    data-aos-delay="300">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="row justify-content-between gy-5">
                            <div
                                class="col-lg-5 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-lg-start order-2 text-center">
                                <h2 data-aos="fade-up">Jek Anget<br>Ndang Tukuo Cok</h2>
                                <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque
                                    ea consequatur
                                    eveniet. Eum quas beatae cumque eum quaerat.</p>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                        class="glightbox btn-watch-video d-flex align-items-center"><i
                                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                                </div>
                            </div>
                            <div class="col-lg-5 order-lg-2 text-lg-start order-1 text-center">
                                <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out"
                                    data-aos-delay="300">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="row justify-content-between gy-5">
                            <div
                                class="col-lg-5 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-lg-start order-2 text-center">
                                <h2 data-aos="fade-up">Opo Maneh<br>Ndang Gasss</h2>
                                <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque
                                    ea consequatur
                                    eveniet. Eum quas beatae cumque eum quaerat.</p>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                        class="glightbox btn-watch-video d-flex align-items-center"><i
                                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                                </div>
                            </div>
                            <div class="col-lg-5 order-lg-2 text-lg-start order-1 text-center">
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

            <div class="row gap-4">
                <div class="col-xl why-box" data-aos="fade-right" data-aos-delay="200">

                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
                        <i class="bi bi-patch-check"></i>
                        <h4>Pelayanan Terbaik</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl why-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
                        <i class="bi bi-gem"></i>
                        <h4>Produk Bermutu</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl why-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
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
                            Murahkom merupakan perusahaan dibidang IT atau Teknologi yang didirikan pada 1 Januari 2010.
                            Dengan berkembangnya teknologi yang semakin pesat di dunia digital, Murahkom menyediakan
                            berbagai keperluan perusahaan, personal, sekolah dan masyarakat yang membutuhkan keperluan
                            teknologi. Murahkom senantiasa mengikuti perkembangan yang terus terupadate dalam dunia IT atau
                            teknologi.
                        </p>
                        <p>Murahkom menyediakan berbagai layanan seperti :</p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> Hardware
                            </li>
                            <li><i class="bi bi-check2-all"></i> Service
                            </li>
                            <li><i class="bi bi-check2-all"></i> Install Software</li>
                        </ul>

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
                    <div class="row gy-5 p-2">

                        @foreach ($product->take(3) as $produk)
                            <div class="col-lg-4">
                                <div class="menu-item p-2">
                                    <a href="" class="">
                                        <img src="assets/img/hero-img.png" class="menu-img img-fluid" alt="">
                                    </a>
                                    <a href="/product/{{ $produk->slug }}">
                                        <h4>{{ $produk->nama_produk }}</h4>
                                    </a>
                                    <p class="price">
                                        Rp. {{ number_format($produk->harga, 0, ',', '.') }}
                                    </p>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a class="text-white"
                                            href="/product/{{ $produk->slug }}">Read More</a></div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    {{-- end Items --}}
                    <div class="d-flex justify-content-center mt-5">
                        <a href="/product" class="btn btn-info">Lihat Produk Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end recommendation --}}


    {{-- testimonials --}}
    <section id="testimonials" class="testimonials section-bg">
        <div class="container p-2" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Apa Kata Mereka <span>Tentang Kami</span></p>
            </div>

            <div class="slides-1 swiper p-2" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                            quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                            irure amet legam anim culpa.
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Marjan</h3>
                                        <h4>Tukang Becak</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="assets/img/testimonials-1.jpg" class="img-fluid testimonial-img"
                                        alt="">
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
