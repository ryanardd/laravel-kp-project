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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

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

    @include('partials/navbar')

    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="row justify-content-between gy-5">
                            <div
                                class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                                <h2 data-aos="fade-up">New Arrival<br>get Buy</h2>
                                <p data-aos="fade-up" data-aos-delay="100">
                                    Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas
                                    beatae cumque eum quaerat.</p>
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
                            <div
                                class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                                <h2 data-aos="fade-up">Jek Anget<br>Ndang Tukuo Cok</h2>
                                <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem
                                    itaque ea consequatur
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
                            <div
                                class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                                <h2 data-aos="fade-up">Opo Maneh<br>Ndang Gasss</h2>
                                <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem
                                    itaque ea consequatur
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

    <div class="content">
        @yield('container')
    </div>


    @include('partials/footer')

    <script>
        // <!-- Vendor JS Files -->
        <
        script src = "assets/vendor/bootstrap/js/bootstrap.bundle.min.js" >
    </script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>
    </script>
</body>

</html>
