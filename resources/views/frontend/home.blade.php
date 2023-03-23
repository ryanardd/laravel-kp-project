@extends('frontend.layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">


        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slides as $slide)
                    <div class="carousel-item active text-center">
                        <img src="/images/slide/{{ $slide->gambar_slide }}" class="img-fluid" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </section>
    <!-- End Hero Section -->

    {{-- service --}}
    <section class="service">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Service Us</h2>
                <p>Learn More <span> Service Us</span></p>
            </div>

            <div class="row gap-4">
                <div class="col-xl why-box" data-aos="fade-right" data-aos-delay="200">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
                        {{-- <i class="bi bi-patch-check"></i> --}}
                        <i>
                            <img src="assets/img/badge-check.png" alt="">
                        </i>
                        <h4>Pelayanan Terbaik</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl why-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
                        <i>
                            <img src="assets/img/gem.png" alt="">
                        </i>
                        <h4>Produk Berkualitas</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl why-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
                        <i>
                            <img src="assets/img/badge-percent.png" alt="">
                        </i>
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
                <div class="col-lg-7 position-relative about-img"
                    style="background-image: url(assets/img/toko-murahkom.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                    {{-- <div class="call-us position-absolute">
                        <h4>Book a Table</h4>
                        <p>+1 5589 55488 55</p>
                    </div> --}}
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
                            <img src="assets/img/toko-murahkom.jpg" class="img-fluid" alt="">
                            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> --}}
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
                                <div class="menu-wrap">
                                    <a href="/product/{{ $produk->slug }}" class="d-flex justify-content-center">
                                        <img src="images/cover/{{ $produk->thumbnail }}" class="img-fluid" alt="">
                                    </a>
                                    <div class="menu-info">
                                        <h5><a href="/product/{{ $produk->slug }}"
                                                title="{{ $produk->nama_produk }}">{{ $produk->nama_produk }}</a>
                                        </h5>

                                        <div class="mt-3">
                                            <div class="col d-flex justify-content-between">
                                                <div class="lead fw-bold">
                                                    Rp{{ number_format($produk->harga, 0, ',', '.') }}
                                                </div>
                                                <p class="rounded-1 p-1">
                                                    {{ $produk->category->nama_category }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {{-- end Items --}}
                    <div class="d-flex justify-content-center mt-5">
                        <a href="/product" class="btn btn-outline-info">Lihat Produk Lainnya</a>
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
                                            Harga dan kwalitas barang bagus.. pegawainya cukup ramah.
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Leo</h3>
                                        <h4>Mahasiswa</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="assets/img/testi-1.jpg" class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Sesuai sama namanya, murah banget dibanding toko lain. Pelayanan juga bagus
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Okiningtyas Cahyandari</h3>
                                        <h4>Pegawai Kantor</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="assets/img/testi-2.jpg" class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Mantappp, packing nya luar biasa aman. Terimakasih atas telah menjaga
                                            kepercayaan pelanggan. Semoga berkah aamiin
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Indra</h3>
                                        <h4>Mahasiswa</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="assets/img/testi-3.jpg" class="img-fluid testimonial-img" alt="">
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
