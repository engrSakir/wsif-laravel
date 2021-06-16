<header id="topnav" class="defaultscroll sticky">
    <div class="container-fluid">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{ route('dashboard') }}">
                <img src="images/logo-black.png" height="22" alt="">
            </a>
        </div>
        <!-- End Logo container-->
        <ul class="dropdowns list-inline mb-0">
            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user.png" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark" href="#">
                            <img src="images/user.png" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                            <div class="flex-1 ms-2">
                                <span class="d-block mb-1">{{ auth()->user()->name }}</span>
                                <small class="text-muted">{{ auth()->user()->email }}</small>
                            </div>
                        </a>
                       <div class="dropdown-divider border-top"></div>
                        <button class="dropdown-item text-dark logout-btn"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</button>
                    </div>
                </div>
            </li>
        </ul>
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-left">
                <li><a href="{{ route('home') }}" target="_blank" class="sub-menu-item">HOME</a></li>
                <li><a href="{{ route('about') }}" target="_blank" class="sub-menu-item">ABOUT</a></li>
                <li><a href="{{ route('team') }}" target="_blank" class="sub-menu-item">TEAM</a></li>
                <li><a href="{{ route('event') }}" target="_blank" class="sub-menu-item">EVENTS</a></li>
                @foreach(pages() as $page)
                    <li><a href="{{ route('page', $page->slug) }}" target="_blank" class="sub-menu-item">{{ $page->name }}</a></li>
                @endforeach
                <li><a href="{{ route('news') }}" target="_blank" class="sub-menu-item">NEWS</a></li>
                <li><a href="{{ route('contact') }}" target="_blank" class="sub-menu-item">CONTACT</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>
