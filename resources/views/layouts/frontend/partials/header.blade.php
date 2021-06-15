<header id="topnav" class="navigation sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{ url('/') }}">
                <img src="images/WSIF-Logo_Green.png" class="l-dark" height="45" alt="">
                <img src="images/WSIF-Logo_Green.png" class="l-light" height="45" alt="">
            </a>
        </div>
        <!-- End Logo container-->
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
            <ul class="navigation-menu nav-left nav-light">
                <li><a href="{{ url('/') }}" class="sub-menu-item">HOME</a></li>
                <li><a href="#" class="sub-menu-item">ABOUT</a></li>
                <li><a href="#" class="sub-menu-item">TEAM</a></li>
                <li><a href="#" class="sub-menu-item">EVENTS</a></li>
                <li><a href="#" class="sub-menu-item">Initiatives & Platforms</a></li>
                <li><a href="#" class="sub-menu-item">NEWS</a></li>
                <li><a href="#" class="sub-menu-item">CONTACT</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>
