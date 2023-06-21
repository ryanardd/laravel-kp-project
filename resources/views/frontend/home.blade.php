@extends('frontend.layouts.main')
@section('home', 'active')
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
                <h2>Layanan Kami</h2>
                <p>Pelajari Lebih Lanjut Layanan Kami</p>
            </div>

            <div class="row gap-4">
                <div class="col-xl why-box" data-aos="fade-right" data-aos-delay="200">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
                        {{-- <i class="bi bi-patch-check"></i> --}}
                        <i>
                            <img src="assets/img/verify.png" alt="">
                        </i>
                        <h4>Pelayanan Terbaik</h4>
                        <p>Kami wajib memberi anda support pelayanan terbaik dari awal datang sampai anda pulang.</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl why-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
                        <i>
                            <img src="assets/img/award.png" alt="">
                        </i>
                        <h4>Produk 100% Original</h4>
                        <p>Kami menyediakan produk asli 100% sehingga Anda dapat merasa tenang saat berbelanja.</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl why-box" data-aos="fade-left" data-aos-delay="400">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center p-2">
                        <i>
                            <img src="assets/img/discount.png" alt="">
                        </i>
                        <h4>Harga Bersaing</h4>
                        <p>Kami menyediakan banyak variasi produk spesial dengan harga yang sangat rendah</p>
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
                <h2>Tentang Kami</h2>
                <p>Pelajari Lebih Lanjut Tentang Kami</p>
            </div>
            <div class="row gy-4 p-2">
                <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/murahkom3.jpg) ;"
                    data-aos="fade-up" data-aos-delay="150">
                    {{-- <div class="call-us position-absolute">
                        <h4>Book a Table</h4>
                        <p>+1 5589 55488 55</p>
                    </div> --}}
                </div>
                <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Murahkom adalah toko komputer / laptop dan elektronik terlengkap di Surabaya. Kami menyediakan
                            berbagai macam komputer dan laptop serta barang elektronik lainnya, Murahkom didirikan pada 24
                            Desember 2009.
                        </p>
                        <p class="fst-italic">
                            Untuk mempercepat proses pesanan Anda, silakan bisa langsung menghubungi kantor kami melalui
                            nomor telepon 031-8470589. Jika Anda tidak menemukan barang yang Anda cari, coba menghubungi
                            atau datang ke kantor kami di Plaza Marina Lt.2 Blok G-05, Surabaya, Jawa Timur untuk menanyakan
                            mengenai barang tersebut. Kami siap melayani Anda mulai dari Senin - Minggu pukul 10.00 - 21.00
                            WIB.
                        </p>
                        <p class="fst-italic">
                            Terima kasih atas kepercayaan Anda untuk kebutuhan komputer dan laptop di Murahkom.
                        </p>
                        {{-- <p>Murahkom menyediakan berbagai layanan seperti :</p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> Hardware
                            </li>
                            <li><i class="bi bi-check2-all"></i> Service
                            </li>
                            <li><i class="bi bi-check2-all"></i> Install Software</li>
                        </ul> --}}

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
                <p>Rekomendasi Untuk Anda</p>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade active show">

                    {{-- Items --}}
                    <div class="box-group p-3">
                        <div class="row">

                            @foreach ($product as $produk)
                                <div class="col-lg-4 mt-2">
                                    <div class="menu-wrap">
                                        <a href="/product/{{ $produk->slug }}" class="d-flex justify-content-center">
                                            <img src="images/cover/{{ $produk->thumbnail }}" class="img-fluid"
                                                alt="">
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
                                                        {{ $produk->stok ? 'Tersedia' : 'Stok Kosong' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        {{-- end Items --}}
                        <div class="d-flex justify-content-end mt-3">
                            <a href="/product" class="text-dark"> Lihat Produk Lainnya<i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
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
                <h2>Testimoni</h2>
                <p>Apa Kata Mereka Tentang Kami</p>
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
