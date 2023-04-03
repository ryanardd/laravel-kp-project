    <!-- ======= Header Navbar ======= -->
    {{-- @dd($category) --}}
    <header class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between container">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1>Murah<span>Kom</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li><a href="{{ route('home') }}" class="@yield('home')">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="@yield('product')">
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
                        <a href="#" class="@yield('market')">
                            <span>Marketplace</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="https://shopee.co.id/murahkomofficial" target="_blank">Shopee</a></li>
                            <li><a href="https://www.tokopedia.com/murahkomofficial" target="_blank">Tokopedia</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('contact-us') }}" class="@yield('contact')">Contact</a></li>
                    <li>
                        <div class="search">
                            <div class="group">
                                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                    <g>
                                        <path
                                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                        </path>
                                    </g>
                                </svg>
                                <form action="{{ route('product') }}">
                                    <input placeholder="Search All Product" type="search" class="input" name="search"
                                        value="{{ request('search') }}">
                                </form>
                            </div>
                        </div>
                    </li>

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
