@extends('layouts.frontend.app')
@push('title') | {{ $page->name }} @endpush
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
                        <h3 class="sub-title mb-4 text-white">{{ $page->name }}</h3>
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $page->name }}</li>
                            </ul>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Hero -->
    <!-- Home content -->
    <section class="section bg-white pb-0">
        <div class="container">
            @foreach($page->items as $item)
                @if($loop->even)
                    <div class="row align-items-center desktopContent">
                        <div class="col-lg-5 col-md-6">
                            <h4 class="title mt-3 mb-4">{{ $item->title }}</h4>
                            <p class="para-desc text-muted">{!! $item->description !!}</p>
                        </div><!--end col-->
                        <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="section-title ms-lg-5">
                                <div class="position-relative">
                                    <img src="{{ $item->image }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                @else
                    <div class="row align-items-center desktopContent">
                        <div class="col-lg-5 col-md-6">
                            <div class="position-relative">
                                <img src="{{ $item->image }}" class="img-fluid" alt="">
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
@endsection

