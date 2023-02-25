<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link
            href="assets/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
        />
        <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
        <link
            href="assets/vendor/glightbox/css/glightbox.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/swiper/swiper-bundle.min.css"
            rel="stylesheet"
        />

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet" />

        <!-- =======================================================
  * Template Name: Yummy - v1.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

     <!-- ======= Header ======= -->
     <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Murah<span>Kom</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="product">Product</a>
                        {{-- <ul>
                            <li class="dropdown"><a href="#"><span>Lapotp</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Asus</a></li>
                                    <li><a href="#">HP</a></li>
                                    <li><a href="#">ROG</a></li>
                                    <li><a href="#">Lenovo</a></li>
                                    <li><a href="#">MSI</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Mouse</a></li>
                            <li><a href="#">Casing</a></li>
                            <li><a href="#">Monitor</a></li>
                            <li><a href="#">SSD</a></li>
                        </ul> --}}
                    </li>
                    <li class="dropdown"><a href="#"><span>Marketplace</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Shopee</a></li>
                            <li><a href="#">Tokopedia</a></li>
                        </ul>
                    </li>
                    <li><a href="#about">About</a></li>
                </ul>
            </nav><!-- .navbar -->
    
        {{-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> --}}
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    
        </div>
    </header><!-- End Header Navbar -->

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
    ><!-- End About Section -->


    {{-- recommendation --}}
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Produk</h2>
            <p>Rekomendasi <span>Untuk Anda</span></p>
          </div>
    
          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="all"> --}}
    
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
                <a href="" class="btn btn-info">Lihat Produk Lainnya</a>
              </div>
            </div>
          </div>
        </div>
    </section> 
    {{-- end recommendation --}}


    {{-- testimonials --}}
    <section id="testimonials" class="testimonials  border border-primary">
        <div class="container border border-primary p-2" data-aos="fade-up">
      
          <div class="section-header">
            <h2>Testimonials</h2>
            <p>Apa Kata Mereka <span>Tentang Kami</span></p>
          </div>
      
          <div class="slides-1 swiper p-2  border border-primary" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
      
              <div class="swiper-slide  border border-danger">
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

    {{-- footer --}}
    <!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-list icon"></i>
          <div>
            <h4>Menu</h4>
            <p>
                <strong><a href="" class="links-menu">Home</a></strong> <br>
                <strong><a href="" class="links-menu">Product</a></strong> <br>
                <strong><a href="" class="links-menu">About</a></strong> <br>
                <strong><a href="" class="links-menu">Contact</a></strong> <br>
            </p>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Available on</h4>
              <p>
                <strong>WhatsApp</strong> <br>
                <strong>Tokopedia</strong><br>
                <strong>Shopee</strong><br>
                <strong>Instagram</strong><br>
              </p>
            </div>
          </div>
        
        <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-wallet icon"></i>
            <div>
              <h4>Pembayaran</h4>
              <p>
                <strong>Transfer Bank</strong> <br>
                <strong>Debit</strong><br>
              </p>
            </div>
          </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2023 <strong><span>MurahKom</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->
    {{-- end footer --}}
    
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
</body>
</html>