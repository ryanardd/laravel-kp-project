    <!-- ======= Header Navbar ======= -->
    {{-- @dd($category) --}}
    <header class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between container">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1>Murah<span>Kom</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="#">
                            <span>Product</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            @foreach (App\Models\Category::all() as $item)
                                <li><a
                                        href="{{ route('product-category', ['category' => $item->slug]) }}">{{ $item->nama_category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">
                            <span>Marketplace</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="https://shopee.co.id/murahkomofficial" target="_blank">Shopee</a></li>
                            <li><a href="https://www.tokopedia.com/murahkomofficial" target="_blank">Tokopedia</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('contact-us') }}">Contact</a></li>

                    @auth
                        <li class="dropdown"><a href="#"><span>Dashboard</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="{{ route('dashboard') }}" target="_blank">My Dashboard</a></li>

                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="logout btn btn-transparent">
                                        <i class="bi bi-box-arrow-left"></i>
                                        Logout
                                    </button>
                                </form>
                            </ul>
                        </li>
                    @endauth


                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header Navbar -->
