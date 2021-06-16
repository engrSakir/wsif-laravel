@extends('layouts.frontend.app')
@push('title') | Initiatives & Platforms @endpush
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
                        <h3 class="sub-title mb-4 text-white">Initiatives & Platforms</h3>
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Initiatives & Platforms</li>
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
            <!---1 number --->
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <h4 class="title mt-3 mb-4">Impact Investment</h4>
                    <p class="para-desc text-muted">
                        Investments made with an objective to create positive, measurable social and environmental impact in conjunction with a financial return are referred to as impact investment. Impact investments can be made in both emerging and developed markets and target a return depending on investors’ strategic goals. The growing impact investment market provides fund to address the world’s most pressing challenges in sectors such as sustainable energy, agriculture, microfinance, eCommerce, and affordable and accessible essential services including housing, healthcare, and education.</p>
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
                        <p class="para-desc text-muted">
                            The process of creating a new internet enabled businesses, products, or services, not only through startups, but also through the digital transformation of an existing business function inside a firm or the public sector. It is predicted that 70% of new value creation in the economy over the next decade will be based on digitally enabled platform business models. Entrepreneurs are rapidly adopting a platform approach that can enable multiple players to solve various social issues together and create value for all parties involved. This will facilitate greater economic participation from marginalized populations.</p>
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
@endsection

