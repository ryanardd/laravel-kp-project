<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="/assets/img/profile.jpg" alt="profile" class="avatar-img rounded-circle">
                </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{ Auth::user()->name }}
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                    <div class="clearfix"></div>
                </div>
            </div>

            {{-- Component  --}}
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('/dasboard') ? 'active' : ''}}">
                    <a  href="{{ url('/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item  {{ request()->routeIs('products.index') ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Product</p>
                    </a>
                </li>

                <li class="nav-item  {{ request()->routeIs('categories.index') ? 'active' : ''}}">
                    <a href="{{ route('categories.index') }}">
                        <i class="fas fa-tags"></i>
                        <p>Category</p>
                    </a>
                </li>

                <li class="nav-item  {{ request()->routeIs('slide.index') ? 'active' : ''}}">
                    <a href="{{ route('slide.index') }}">
                    <i class="fas fa-newspaper"></i>
                        <p>Slide Banner</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit()">
                        <i class="fas fa-undo"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
