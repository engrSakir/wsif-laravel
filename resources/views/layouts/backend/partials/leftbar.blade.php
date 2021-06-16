<div class="col-xl-3 col-lg-4 col-md-5 col-12">
    <div class="rounded shadow overflow-hidden sticky-bar">
        <div class="card border-0">
            <img src="images/bg/banner.jpg" class="img-fluid" alt="">
        </div>
        <div class="text-center avatar-profile margin-nagative mt-n5 position-relative pb-4 border-bottom">
            <img src="images/user.png" class="rounded-circle shadow-md avatar avatar-md-md" alt="">
            <h5 class="mt-3 mb-1">{{ auth()->user()->name }}</h5>
            <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
        </div>
        <ul class="list-unstyled sidebar-nav mb-0">
            <li class="navbar-item"><a href="{{ route('dashboard') }}" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> Dashboard</a></li>
            <li class="navbar-item"><a href="{{ route('home.edit') }}" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> Home</a></li>
            <li class="navbar-item"><a href="{{ route('about.edit') }}" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> About</a></li>
            <li class="navbar-item"><a href="{{ route('team.index') }}" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> Team</a></li>
            @foreach(pages() as $page)
                <li class="navbar-item"><a href="{{ route('page.edit', $page) }}" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> {{ $page->name }}</a></li>
                <li class="navbar-item"><a href="{{ route('page.show', $page) }}" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> Details of {{ $page->name }}</a></li>
            @endforeach
            <li class="navbar-item"><a href="{{ route('basic.edit') }}" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> Basic Information Management</a></li>
        </ul>
    </div>
</div><!--end col-->
