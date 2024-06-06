<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3 col-2">
                        <a href="{{ url('') }}" class="logo m-0 float-start">Blogger<span class="text-primary">.</span></a>
                    </div>

                    @php
                        $getCategoryHeader = App\Models\CategoryModel::getCategoryMenu();
                    @endphp
                    <div class="col-lg-6 col-8 text-center">
                        <form action="#" class="search-form d-inline-block d-lg-none">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li><a href="{{ url('') }}">Home</a></li>
                            @foreach($getCategoryHeader as $CategoryHeader)
                                <li><a href="{{ url($CategoryHeader->slug) }}">{{ $CategoryHeader->title }}</a></li>
                            @endforeach
                            <li><a href="{{ url('review') }}">Blogs</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-3 col-2 text-end">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                        <form action="{{ url('review') }}" class="search-form d-none d-lg-inline-block">
                            <input type="text" class="form-control" name="q" id="s" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>
                        <ul class="list-inline mb-0">
                            @if(Auth::check())
                                <li class="list-inline-item">
                                    <a href="{{ url('panel/dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('logout') }}" class="btn btn-primary btn-sm" 
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li class="list-inline-item">
                                    <a href="{{ url('login') }}" class="btn btn-primary btn-sm">Login</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('register') }}" class="btn btn-primary btn-sm">Register</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
