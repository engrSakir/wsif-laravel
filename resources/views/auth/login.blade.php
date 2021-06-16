
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
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-icon.png') }}">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/remixicon.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />

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

<div class="back-to-home rounded d-none d-sm-block">
    <a href="{{ route('home') }}" class="btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
</div>

<!-- Hero Start -->
<section class="bg-home d-flex bg-light align-items-center" style="background: url('images/bg/bg-lines-one.png') center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">

                <div class="card login-page bg-white shadow mt-4 rounded border-0">
                    <div class="card-body">
                        <img src="images/logo-black.png" height="60" class="mx-auto d-block" alt="">
                        <form action="{{ route('login') }}" method="post" class="login-form mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <strong>Attention! </strong> {{ $message }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                        @error('password')
                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <strong>Attention! </strong> {{ $message }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!---->
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Icons -->
<script src="js/feather.min.js"></script>
<!-- Main Js -->
<script src="js/app.js"></script>
</body>
</html>
