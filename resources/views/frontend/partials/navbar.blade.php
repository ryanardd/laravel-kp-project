    <!-- ======= Header Navbar ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="/home" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Murah<span>Kom</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li><a href="/">Home</a></li>
                    <li><a href="/product">Product</a>
                    </li>
                    <li class="dropdown"><a href="#"><span>Marketplace</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="https://shopee.co.id/murahkomofficial" target="blank">Shopee</a></li>
                            <li><a href="https://www.tokopedia.com/murahkomofficial" target="blank">Tokopedia</a></li>
                        </ul>
                    </li>

                    <li><a href="/contact-us">Contact</a></li>


                    @auth
                        <li class="dropdown"><a href="#"><span>Dashboard</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="/dashboard">My Dashboard</a></li>

                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit">
                                        logout
                                    </button>
                                </form>
                            </ul>
                        </li>
                    @endauth


                </ul>
            </nav><!-- .navbar -->

        {{-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> --}}
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header Navbar -->
