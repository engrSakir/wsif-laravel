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
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-icon.png') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/remixicon.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- SLIDER -->
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}"/>
    <!-- Css -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css" />
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
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- SLIDER -->
<script src="{{ asset('js/tiny-slider.js') }}"></script>
<script src="{{ asset('js/tiny-slider-init.js') }}"></script>
<!-- Counter -->
<script src="{{ asset('js/counter.init.js') }}"></script>
<!-- Icons -->
<script src="{{ asset('js/feather.min.js') }}"></script>
<!-- Main Js -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('script')
</body>
</html>

