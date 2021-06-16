@extends('layouts.frontend.app')
@push('title') | About @endpush
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
                        <h3 class="sub-title mb-4 text-white">About us</h3>
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ABOUT</li>
                            </ul>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Hero -->
    <!-- Home content -->
    <section class="section bg-white">
        <div class="container" style="margin-top: -50px;">
           {!! get_static_option('about_description') !!}
        </div>
    </section>
    <!-- /Home content -->
@endsection

