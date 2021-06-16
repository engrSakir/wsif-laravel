@extends('layouts.frontend.app')
@push('title') | Contact @endpush
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
                        <h3 class="sub-title mb-4 text-white">CONTACT US</h3>
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CONTACT US</li>
                            </ul>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Hero -->
    <section class="mt-100 mt-60 mb-5">
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="me-lg-5">
                        <img src="images/contact/contact.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="custom-form rounded shadow p-4">
                        <h5 class="mb-4">Get in touch!</h5>
                        <form method="" name="myForm" onsubmit="">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control border rounded" placeholder="First Name :">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input name="email" id="email" type="email" class="form-control border rounded" placeholder="Your email :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input name="subject" id="subject" class="form-control border rounded" placeholder="Your subject :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Comments <span class="text-danger">*</span></label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control border rounded" placeholder="Your Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div><!--end custom-form-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card features feature-primary text-center border-0">
                        <div class="icon text-center rounded-md mx-auto">
                            <i class="uil uil-phone h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <h5>Phone</h5>
                            <p class="text-muted mt-3">Great doctor if you need your family member to get effective assistance</p>
                            <a href="tel:+152534-468-854" class="link">+152 534-468-854</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card features feature-primary text-center border-0">
                        <div class="icon text-center rounded-md mx-auto">
                            <i class="uil uil-envelope h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <h5>Email</h5>
                            <p class="text-muted mt-3">Great doctor if you need your family member to get effective assistance</p>
                            <a href="mailto:contact@example.com" class="link">contact@example.com</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div class="card features feature-primary text-center border-0">
                        <div class="icon text-center rounded-md mx-auto">
                            <i class="uil uil-map-marker h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <h5>Location</h5>
                            <p class="text-muted mt-3">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                            <a href="#" class="link">View on Google map</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
@endsection

