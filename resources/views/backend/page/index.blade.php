@extends('layouts.backend.app')
@push('title') | Dashboard @endpush
@push('style')

@endpush
@push('script')

@endpush

@section('content')
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
        <h5 class="mb-0">Dashboard</h5>
        <div class="row">
            <div class="col-xl-3 col-lg-6 mt-4">
                <div class="card shadow border-0 p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="align-items-center mb-0">Appointment <span class="badge badge-pill badge-soft-primary ms-1">+15%</span></h6>
                        <p class="mb-0 text-muted">220+ Week</p>
                    </div>
                    <div id="chart-1"></div>
                </div>
            </div><!--end col-->

            <div class="col-xl-3 col-lg-6 mt-4">
                <div class="card shadow border-0 p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="align-items-center mb-0">Patients <span class="badge badge-pill badge-soft-success ms-1">+20%</span></h6>
                        <p class="mb-0 text-muted">220+ Week</p>
                    </div>
                    <div id="chart-2"></div>
                </div>
            </div><!--end col-->

            <div class="col-xl-3 col-lg-6 mt-4">
                <div class="card shadow border-0 p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="align-items-center mb-0">Urgent <span class="badge badge-pill badge-soft-warning ms-1">+5%</span></h6>
                        <p class="mb-0 text-muted">220+ Week</p>
                    </div>
                    <div id="chart-3"></div>
                </div>
            </div><!--end col-->

            <div class="col-xl-3 col-lg-6 mt-4">
                <div class="card shadow border-0 p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="align-items-center mb-0">Canceled <span class="badge badge-pill badge-soft-danger ms-1">-5%</span></h6>
                        <p class="mb-0 text-muted">220+ Week</p>
                    </div>
                    <div id="chart-4"></div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
@endsection

