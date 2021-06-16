@extends('layouts.frontend.app')
@push('title') | About @endpush
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
           World Social Innovation Forum (WSIF) is a global platform of social changemakers, social innovators, impact investors, policymakers and thought leaders in government, non-profit, and corporate sectors. It is headquartered in Silicon Valley and it aims to improve the lives of people and build stronger, healthier communities across the globe. Our approach provides a unique combination of educating, engaging, and connecting leaders in areas like impact investment, digital women entrepreneurship, digital healthcare, digital education, and smart city/village initiatives.
        </div>
    </section>
    <!-- /Home content -->
@endsection

