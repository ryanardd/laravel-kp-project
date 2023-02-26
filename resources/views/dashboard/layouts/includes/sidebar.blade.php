<div class="sidebar sidebar-style-2" data-background-color="grey2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">

                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                           {{  Auth::user()->name }}
                        </span>
                    </a>
                </div>
            </div>
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
                    <i class="fas fa-newspaper"></i>
                        <p>Category</p>
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