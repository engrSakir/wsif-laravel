@extends('layouts.frontend.app')
@push('title') | Event @endpush
@push('style')

@endpush
@push('script')

@endpush

@section('content')
    <!-- Hero -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/bg/about.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="sub-title mb-4 text-white">OUR EVENTS</h3>
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">EVENTS</li>
                            </ul>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Hero -->
    <!-- Home content -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <span class="badge badge-pill badge-soft-primary">Upcoming Events</span>
                        <h4 class="title mt-3 mb-4">Upcoming Events</h4>
                        <p class="text-muted mx-auto para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2 d-flex align-items-stretch">
                    <div class="card team border-0 shadow-lg p-3 mb-5 bg-white rounded overflow-hidden text-center">
                        <div class="team-person position-relative overflow-hidden">
                            <img src="images/logo-black.png" class="img-fluid" alt="">
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col text-center text-white bg-primary">
                                05 - 06 AUGUST 2021
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="#" class="title text-dark h5 d-block mb-0">
                                WORLD SOCIAL INNOVATION FORUM – ASIA MEETING
                            </a>
                            <ul class="list-unstyled mt-2 mb-0">
                                <li class="">
                                    <i class="ri-map-pin-line text-primary"></i>
                                    <small class="text-muted ms-2">Virtual</small>
                                </li>
                            </ul>
                            <ul class="list-unstyled mt-2 mb-0 text-center">
                                <a href="#" class="btn btn-pills btn-soft-primary"> VIEW DETAILS </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2 d-flex align-items-stretch">
                    <div class="card team border-0 shadow-lg p-3 mb-5 bg-white rounded overflow-hidden text-center">
                        <div class="team-person position-relative overflow-hidden">
                            <img src="images/logo-black.png" class="img-fluid" alt="">
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col text-center text-white bg-primary">
                                08 - 09 NOVEMBER 2021
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="#" class="title text-dark h5 d-block mb-0">
                                WORLD SOCIAL INNOVATION FORUM – ANNUAL MEETING
                            </a>
                            <ul class="list-unstyled mt-2 mb-0">
                                <li class="">
                                    <i class="ri-map-pin-line text-primary"></i>
                                    <small class="text-muted ms-2">Singapore, Singapore</small>
                                </li>
                            </ul>
                            <ul class="list-unstyled mt-2 mb-0 text-center">
                                <a href="#" class="btn btn-pills btn-soft-primary"> VIEW DETAILS </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Home content -->
@endsection

