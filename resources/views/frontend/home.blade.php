@extends('layouts.frontend.app')
@push('title') | Home @endpush
@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"
          type="text/css"/>
@endpush
@push('script')

@endpush

@section('content')
    <!-- Hero -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/bg/banner.jpg') center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-lg-0">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-title">
                                <h4 class="display-4 fw-bold text-white mt-3 mb-4">
                                    World Social Innovation Forum
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-title">
                                <p class="para-desc text-white-50 mb-0">
                                    World Social Innovation Forum (WSIF) is a global platform of social changemakers,
                                    social innovators, impact investors, policymakers and thought leaders in government,
                                    non-profit, and corporate sectors. It is headquartered in Silicon Valley and it aims
                                    to improve the lives of people and build stronger, healthier communities across the
                                    globe. Our approach provides a unique combination of educating, engaging, and
                                    connecting leaders in areas like impact investment, digital women entrepreneurship,
                                    digital healthcare, digital education, and smart city/village initiatives.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading-title">
                                <p class="para-desc text-white-50 mb-0 text-center">
                                    Aug 05 - 06 2021 <br>
                                    <b> WORLD SOCIAL INNOVATION FORUM – ASIA MEETING</b> <br>
                                    Virtual <br>
                                    Nov 08 - 09 2021 <br>
                                    <b>WORLD SOCIAL INNOVATION FORUM – ANNUAL MEETING</b> <br>
                                    Singapore <br>
                                </p>
                            </div>
                        </div>
                    </div>

                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- /Hero -->
    <!-- Number -->
    <section class="section" style="background-color: rgb(150, 187, 124);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="features-absolute bg-white shadow rounded overflow-hidden card-group text-center">
                        <div class="card border-0 bg-light p-4">
                            <i class="fas fa-chart-line text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Impact Investment</h5>
                        </div>
                        <div class="card border-0 p-4">
                            <i class="fas fa-user-tie text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Digital Entrepreneurship</h5>
                        </div>
                        <div class="card border-0 bg-light p-4">
                            <i class="fas fa-heartbeat text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Digital Healthcare</h5>
                        </div>
                        <div class="card border-0 p-4">
                            <i class="fas fa-user-graduate text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Digital Education</h5>
                        </div>
                        <div class="card border-0 p-4">
                            <i class="fas fa-city text-primary h2 mb-0"></i>
                            <h5 class="mt-1">Smart City Initiatives</h5>
                        </div>
                    </div>
                </div><!--end col-->
            </div>
        </div><!--end container-->
    </section>
    <!-- /Number -->
    <!-- Home content -->
    <section class="section bg-white pb-0">
        <div class="container">
            <!---1 number --->
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <h4 class="title mt-3 mb-4">Impact Investment</h4>
                    <p class="para-desc text-muted">Investments made with an objective to create positive, measurable social and environmental impact in conjunction with a financial return are referred to as impact investment. Impact investments can be made in both emerging and developed markets and target a return depending on investors’ strategic goals. The growing impact investment market provides fund to address the world’s most pressing challenges in sectors such as sustainable energy, agriculture, microfinance, eCommerce, and affordable and accessible essential services including housing, healthcare, and education.</p>
                </div><!--end col-->
                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <div class="position-relative">
                            <img src="images/home/one-image.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div>
            <!---2 number --->
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="position-relative">
                        <img src="images/home/two-image.png" class="img-fluid" alt="">
                    </div>
                </div><!--end col-->
                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mt-3 mb-4">Digital Entrepreneurship</h4>
                        <p class="para-desc text-muted">The process of creating a new internet enabled businesses, products, or services, not only through startups, but also through the digital transformation of an existing business function inside a firm or the public sector. It is predicted that 70% of new value creation in the economy over the next decade will be based on digitally enabled platform business models. Entrepreneurs are rapidly adopting a platform approach that can enable multiple players to solve various social issues together and create value for all parties involved. This will facilitate greater economic participation from marginalized populations.</p>
                    </div>
                </div><!--end col-->
            </div>
            <!---3 number --->
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <h4 class="title mt-3 mb-4">Digital Healthcare</h4>
                    <p class="para-desc text-muted">Digital healthcare is a cultural transformation initiated by advanced technologies that lead to an equal-level partnership between patients and their caregivers. In developing countries, the healthcare sector is significantly behind other sectors in terms of using data and technology. With digital healthcare, the traditional means of patientcare will be replaced by a less error prone and well-integrated healthcare ecosystem that will alleviate pain, reinstate health, and ensure wellbeing of people.</p>
                </div><!--end col-->
                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <div class="position-relative">
                            <img src="images/home/three-image.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div>
            <!---4 number --->
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="position-relative">
                        <img src="images/home/four-image.png" class="img-fluid" alt="">
                    </div>
                </div><!--end col-->
                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mt-3 mb-4">Digital Education</h4>
                        <p class="para-desc text-muted">Digital education is about utilizing digital technologies and tools to deliver education while empowering the learner. It has revolutionized the traditional process of learning in classrooms and made learning mobile, interactive and engaging. Digital education can enable a student residing in any region of the world to get education from the best educators, schools, and universities through digital platforms. It will allow students to have access to unlimited information on any subject, increasing study efficiency and achieving better results in learning – and will eventually deliver the promise of education for all.</p>
                    </div>
                </div><!--end col-->
            </div>
            <!---5 number --->
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <h4 class="title mt-3 mb-4">Smart City Initiatives</h4>
                    <p class="para-desc text-muted">Refers to initiatives that effectively leverage digitalization to boost citizen well-being and deliver more efficient, sustainable, and inclusive urban services and environments. Smart city technologies are being developed more rapidly in emerging markets as more pressing needs create better conditions for radical innovation and rapid scale. Startups are playing a vital role in the construction of smart city with their innovation and ability to connect their technological resources in bringing solutions to urban challenges.</p>
                </div><!--end col-->
                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <div class="position-relative">
                            <img src="images/home/five-image.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div>
        </div>
    </section>
    <!-- /Home content -->
    <!-- News -->
    <section class="section">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <span class="badge badge-pill badge-soft-primary mb-3">Read News</span>
                        <h4 class="title mb-4">Latest News &amp; Blogs</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="images/blog/01.jpg" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small me-3"><i class="uil uil-calendar-alt text-dark h6 me-1"></i>20th November, 2020</li>
                                <li class="list-inline-item text-muted small"><i class="uil uil-clock text-dark h6 me-1"></i>5 min read</li>
                            </ul>
                            <a href="blog-detail.html" class="text-dark title h5">You can easily connect to doctor and make a treatment</a>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="link">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="images/blog/02.jpg" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small me-3"><i class="uil uil-calendar-alt text-dark h6 me-1"></i>20th November, 2020</li>
                                <li class="list-inline-item text-muted small"><i class="uil uil-clock text-dark h6 me-1"></i>5 min read</li>
                            </ul>
                            <a href="blog-detail.html" class="text-dark title h5">Lockdowns lead to fewer people seeking medical care</a>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="link">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="images/blog/03.jpg" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small me-3"><i class="uil uil-calendar-alt text-dark h6 me-1"></i>20th November, 2020</li>
                                <li class="list-inline-item text-muted small"><i class="uil uil-clock text-dark h6 me-1"></i>5 min read</li>
                            </ul>
                            <a href="blog-detail.html" class="text-dark title h5">Emergency medicine research course for the doctors</a>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="link">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /News -->
    <!-- Partners -->
    <section class="py-4 bg-light">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Valuable products</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img width="120" height="120" src="images/partners/1.png" class="avatar" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img width="120" height="120" src="images/partners/2.png" class="avatar" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img width="120" height="120" src="images/partners/3.png" class="avatar" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img width="120" height="120" src="images/partners/4.png" class="avatar" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img width="120" height="120" src="images/partners/5.png" class="avatar" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- /Partners -->
@endsection

