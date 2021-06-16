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
                        <h3 class="sub-title mb-4 text-white">Leadership Team</h3>
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team</li>
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
                @foreach($teams as $team)
                <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2 d-flex align-items-stretch">
                    <div class="card team border-0 rounded shadow overflow-hidden">
                        <div class="team-img position-relative">
                            <img src="{{ asset($team->image) }}" class="img-fluid" alt="">
                            <ul class="list-unstyled team-social mb-0">
                                <li class="mt-2"><a href="{!! $team->linkedin !!}" target="_blank" class="btn btn-icon btn-pills btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin icons"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content text-center">
                            <a href="#" class="title text-dark h5 d-block mb-0">
                               {{ $team->name }}
                            </a>
                            <small class="text-muted speciality">
                                {!! $team->designation !!}
                            </small>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Home content -->
@endsection

