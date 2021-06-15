
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <!-- Page Title -->
    <title>{{ config('app.name') }} @stack('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="shreethemes@gmail.com" />
    <meta name="website" content="../../../www.shreethemes.in/index.html" />
    <meta name="Version" content="v1.0.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/remixicon.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- SLIDER -->
    <link rel="stylesheet" href="css/tiny-slider.css"/>
    <!-- Css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    @stack('style')
</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navbar STart -->
@include('layouts.frontend.partials.header')
<!--end header-->
<!-- Navbar End -->

@yield('content')

<!-- Start -->
@include('layouts.frontend.partials.footer')
<!--end footer-->
<!-- End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-pills btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<!-- MOdal Start -->
<div class="modal fade" id="watchvideomodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content video-modal rounded overflow-hidden">
            <video class="w-100" controls autoplay muted loop>
                <source src="../../../www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                <!--Browser does not support <video> tag -->
            </video>
        </div>
    </div>
</div>
<!-- MOdal End -->

<!-- javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- SLIDER -->
<script src="js/tiny-slider.js"></script>
<script src="js/tiny-slider-init.js"></script>
<!-- Counter -->
<script src="js/counter.init.js"></script>
<!-- Icons -->
<script src="js/feather.min.js"></script>
<!-- Main Js -->
<script src="js/app.js"></script>
@stack('script')
</body>
</html>

