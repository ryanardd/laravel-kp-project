<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Murah<span>Kom</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
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
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Marketplace</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Shopee</a></li>
                            <li><a href="#">Tokopedia</a></li>
                        </ul>
                    </li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->
    
        {{-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> --}}
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    
        </div>
    </header><!-- End Header -->

    {{-- Slide --}}
    <section id="hero" class="hero d-flex align-items-center section-bg">
        @yield('content')
    </section>
    {{-- End Slide --}}
    
    {{-- Service --}}
    <section id="why-us" class="why-us">
        @yield('service')
    </section>
    {{-- End Service --}}

    {{-- About --}}
    <section id="about" class="about section-bg">
        @yield('about')
    </section>
    {{-- End About --}}

    {{-- Testimonial --}}
    <section id="testimonials" class="testimonials">
        @yield('testimonial')
    </section>
    {{-- End Testimonial --}}

    @include('partials/footer')
    
    <script>
        // <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        
        <script src="assets/js/main.js"></script>
    </script>
</body>
</html>