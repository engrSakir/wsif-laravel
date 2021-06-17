@extends('layouts.frontend.app')
@push('title') | Team @endpush
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
                        <h3 class="sub-title mb-4 text-white">{{ $team->name }}</h3>
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('team') }}">TEAM</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $team->name }}</li>
                            </ul>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Hero -->
    <!-- Home content -->
    <section class="bg-hero">
        <div class="container">
            <div class="row mt-lg-5">
                <div class="col-md-6 col-lg-4">
                    <div class="rounded shadow overflow-hidden sticky-bar">
                        <div class="card border-0">
                            <img src="{{ asset($team->image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="list-unstyled p-4 text-center">
                            <div class="progress-box mb-4">
                                <h6 class="title">{{ $team->name }}</h6>
                            </div><!--end process box-->

                            <div class="d-flex align-items-center mt-2">
                                <p class="text-muted mb-0 ms-2"> {!! $team->designation !!}</p>
                            </div>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 shadow overflow-hidden">
                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded-0 shadow overflow-hidden bg-light mb-0" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded-0 active" id="overview-tab" data-bs-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h4 class="title fw-normal mb-0">{{ $team->name }}</h4>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul>

                        <div class="tab-content p-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="overview-tab">
                                <h5 class="mb-0"></h5>

                                <p class="text-muted mt-4 mb-0">
                                    {!! $team->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Home content -->
@endsection

