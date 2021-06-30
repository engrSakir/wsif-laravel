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
                @foreach($all_news as $news)
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 d-flex align-items-stretch">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="{{ asset($news->image) }}" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small me-3"><i class="uil uil-calendar-alt text-dark h6 me-1"></i>{{ $news->created_at->format('d-M-Y') }}</li>
                            </ul>
                            <a href="#" class="text-dark title h5">
                            {{ $news->title }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /News -->>
@endsection

