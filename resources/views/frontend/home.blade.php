@extends('layouts.frontend.app')
@push('title') | Home @endpush
@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"
          type="text/css"/>
    <style type="text/css">

        .mobileContent {
            display: none;
        }

        /* Smartphone Portrait and Landscape */

        @media only screen

        and (min-device-width: 320px)

        and (max-device-width: 480px) {
            .mobileContent {
                display: inline;
            }
        }

    </style>
@endpush
@push('script')

@endpush

@section('content')
    <!-- Hero -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/bg/banner.jpg') center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-lg-0">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-title">
                                <h4 class="display-4 fw-bold text-white mt-3 mb-4">
                                    {{ get_static_option('home_banner_title') }}
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-title">
                                <p class="para-desc text-white-50 mb-0">
                                    {!! get_static_option('home_banner_description') !!}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mobileContent">
                                <br>
                                <br>
                            </div>
                            <div class="heading-title">
                                <p class="para-desc text-white-50 mb-0 text-center">
                                    Aug 05 - 06 2021 <br>
                                    <b> WORLD SOCIAL INNOVATION FORUM – ASIA MEETING</b> <br>
                                    Virtual
                                </p>
                                <hr>
                                <p class="para-desc text-white-50 mb-0 text-center">
                                    Nov 08 - 09 2021 <br>
                                    <b>WORLD SOCIAL INNOVATION FORUM – ANNUAL MEETING</b> <br>
                                    Singapore <br>
                                </p>
                            </div>
                        </div>
                    </div>

                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- /Hero -->
    <!-- Number -->
    <section class="section" style="background-color: rgb(150, 187, 124);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="features-absolute bg-white shadow rounded overflow-hidden card-group text-center">
                        <div class="card border-0 bg-light p-4">
                            <i class="fas fa-chart-line text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Impact Investment</h5>
                        </div>
                        <div class="card border-0 p-4">
                            <i class="fas fa-user-tie text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Digital Entrepreneurship</h5>
                        </div>
                        <div class="card border-0 bg-light p-4">
                            <i class="fas fa-heartbeat text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Digital Healthcare</h5>
                        </div>
                        <div class="card border-0 p-4">
                            <i class="fas fa-user-graduate text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Digital Education</h5>
                        </div>
                        <div class="card border-0 p-4">
                            <i class="fas fa-city text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Smart City Initiatives</h5>
                        </div>
                    </div>
                </div><!--end col-->
            </div>
        </div><!--end container-->
    </section>
    <!-- /Number -->
    <!-- Home content -->
    <section class="section bg-white pb-0">
        <div class="container">
            @foreach($items as $item)
                @if($loop->even)
                    <div class="row align-items-center desktopContent">
                        <div class="col-lg-5 col-md-6">
                            <h4 class="title mt-3 mb-4">{{ $item->title }}</h4>
                            <p class="para-desc text-muted">{!! $item->description !!}</p>
                        </div><!--end col-->
                        <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="section-title ms-lg-5">
                                <div class="position-relative">
                                    <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                @else
                    <div class="row align-items-center desktopContent">
                        <div class="col-lg-5 col-md-6">
                            <div class="position-relative">
                                <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="section-title ms-lg-5">
                                <h4 class="title mt-3 mb-4">{{ $item->title }}</h4>
                                <p class="para-desc text-muted">{!! $item->description !!}</p>
                            </div>
                        </div><!--end col-->
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- /Home content -->
    <!-- News -->
    <section class="section">
        <div class="container mt-60">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 d-flex align-items-stretch">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="images/news/1.jpg" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small me-3"><i
                                        class="uil uil-calendar-alt text-dark h6 me-1"></i>09th May
                                </li>
                            </ul>
                            <a href="#" class="text-dark title h5">
                                WSIF Partners with Startup World Cup and Startup Hub Nepal to Support Impact Startups
                                Aligning with SDGs
                            </a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 d-flex align-items-stretch">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="images/news/2.jpg" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small me-3"><i
                                        class="uil uil-calendar-alt text-dark h6 me-1"></i>10th April
                                </li>
                            </ul>
                            <a href="#" class="text-dark title h5">
                                WSIF Partners with Bangladesh’s ICT Division to Launch Plasma Network
                            </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /News -->
    <!-- Partners -->
    <section class="py-4 bg-light">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    @if($partners->count() > 0)<h4 class="title mb-4">Valuable products</h4> @endif
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="container">
            <div class="row justify-content-center">
                @foreach($partners as $partner)
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img width="120" height="120" src="{{ asset($partner->image) }}" class="avatar" alt="">
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Partners -->
@endsection

