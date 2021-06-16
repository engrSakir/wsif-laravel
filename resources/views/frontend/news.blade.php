@extends('layouts.frontend.app')
@push('title') | News @endpush
@push('style')

@endpush
@push('script')

@endpush

@section('content')
    <!-- Hero -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/bg/banner.jpg') center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="sub-title mb-4 text-white">NEWS</h3>
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">NEWS</li>
                            </ul>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Hero -->
    <!-- News -->
    <section class="section">
        <div class="container mt-60">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 d-flex align-items-stretch">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="images/news/1.jpg" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small me-3"><i class="uil uil-calendar-alt text-dark h6 me-1"></i>09th May</li>
                            </ul>
                            <a href="#" class="text-dark title h5">
                                WSIF Partners with Startup World Cup and Startup Hub Nepal to Support Impact Startups Aligning with SDGs
                            </a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 d-flex align-items-stretch">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="images/news/2.jpg" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small me-3"><i class="uil uil-calendar-alt text-dark h6 me-1"></i>10th April</li>
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
    <!-- /News -->>
@endsection

