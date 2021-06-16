
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} @stack('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--  Essential META Tags -->
    <meta content="author" name="{{ config('app.name') }}">
    <meta content="keywords" name="keyword1, keyword2, keyword3, keyword4">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="World Social Innovation Forum (WSIF) is a global platform of social changemakers, social innovators, impact investors, policymakers and thought leaders in government, non-profit, and corporate sectors.">
    <meta property="og:image" content="{{ asset('images/meta/main-meta.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website"/>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-icon.png') }}">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- SLIDER -->
    <link rel="stylesheet" href="css/tiny-slider.css"/>
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/remixicon.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    @stack('style')
<!--====== AJAX ======-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
@include('layouts.backend.partials.nav')
<!--end header-->
<!-- Navbar End -->
<!-- Start Hero -->
<section class="bg-dashboard">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.backend.partials.leftbar')
            @yield('content')
        </div><!--end row-->
    </div><!--end container-->
</section>
<!--end section-->
<!-- End Hero -->

<!-- Footer STart -->
@include('layouts.backend.partials.footer')
<!--end Footer-->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-pills btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->
@stack('summernote')
<!-- javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- SLIDER -->
<script src="js/tiny-slider.js"></script>
<script src="js/tiny-slider-init.js"></script>
<!-- Chart -->
<script src="js/apexcharts.min.js"></script>
<script src="js/areachart.init.js"></script>
<!-- Icons -->
<script src="js/feather.min.js"></script>
<!-- Main Js -->
<script src="js/app.js"></script>
<script src="js/helper.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stack('script')
@include('sweetalert::alert')
</body>
</html>
