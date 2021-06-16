<footer class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-4 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="#" class="logo-footer">
                    <img src="images/logo-white.png" height="50" alt="">
                </a>
                <p class="mt-4 me-xl-5">
                    {!! get_static_option('footer_note') !!}
                </p>
            </div><!--end col-->

            <div class="col-xl-7 col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Company</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="{{ route('about') }}" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> ABOUT</a></li>
                            <li><a href="{{ route('team') }}" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> TEAM</a></li>

                            @foreach(pages() as $page)
                                <li><a href="{{ route('page', $page->slug) }}" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> {{ $page->name }}</a></li>
                            @endforeach
                            <li><a href="{{ route('news') }}" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> NEWS</a></li>
                            <li><a href="{{ route('contact') }}" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> CONTACT</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Our Office</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li>
                                <b>{{ get_static_option('office_name_one') }}</b> <br>
                                {{ get_static_option('office_address_one') }}
                            </li>
                            <li>
                                <b>{{ get_static_option('office_name_two') }}</b> <br>
                                {{ get_static_option('office_address_two') }}
                            </li>
                            <li>
                                <b>{{ get_static_option('office_name_three') }}</b> <br>
                                {{ get_static_option('office_address_three') }}
                            </li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Contact us</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li class="d-flex align-items-center">
                                <i data-feather="mail" class="fea icon-sm text-foot align-middle"></i>
                                <a href="mailto:contact@example.com" class="text-foot ms-2">{{ get_static_option('email') }}</a>
                            </li>
                        </ul>

                        <ul class="list-unstyled social-icon footer-social mb-0 mt-4">
                            <li class="list-inline-item"><a href="{{ get_static_option('facebook') }}" target="_blank" class="rounded-pill"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="{{ get_static_option('instagram') }}" target="_blank" class="rounded-pill"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <br>
                            <li class="list-inline-item"><a href="{{ get_static_option('twitter') }}" target="_blank" class="rounded-pill"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="{{ get_static_option('linkedin') }}" target="_blank" class="rounded-pill"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-5">
        <div class="pt-4 footer-bar">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-start text-center">
                        <p class="mb-0"> {!! get_static_option('footer_credit') !!}</p>
                    </div>
                </div><!--end col-->

                <div class="col-sm-6 mt-4 mt-sm-0">
                    <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                        <li class="list-inline-item"><a href="{{ route('about') }}" class="text-foot me-2">About</a></li>
                        <li class="list-inline-item"><a href="{{ route('contact') }}" class="text-foot me-2">Contact</a></li>
                    </ul>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
</footer>
