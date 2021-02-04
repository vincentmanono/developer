@extends('layouts.mainapp')
@section('content')


    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url('assets/images/slider.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h4><strong>Professional <span class="theme_color">website
                                                </span>Developers</strong></h4>br
                                        <h1>Get professionals who can,
                                            develop for you the best website.</h1>
                                        <br>
                                        <a class="start_exchange_bt" href="{{ route('contact-us') }}">
                                            <h4> <span class="theme_color">Contact</span></h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url('/assets/images/slider.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h4><strong>Outstanding <span class="theme_color"> Website</span>
                                                Development</strong></h4>
                                        <br>
                                        <h1>
                                            At Lagaster, we design responsive website pages
                                            that will promote your business and idea.</h1>
                                        <a class="start_exchange_bt" href="{{ route('about') }}">
                                            <h4><span class="theme_color">Read More</span></h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>

    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img height="90%" width="120%" src="{{ asset('assets/images/welcome.jpg') }}" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2><span class="theme_color">Welcome</span> To Lagaster</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>Welcome to Lagaster Website Developers. <br>
                            At Lagaster, our people transform your idea into an amazing website that suits your needs. We
                            challenge the status quo by developing professional websites.

                            Our website developer team is one of possibilities where each website developer is empowered to
                            achieve success on their own terms. And together as website developers we are shaping the future
                            of your business in a digital world.</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="{{ route('about') }}">About more ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section white_fonts" style="background: #2a2a2a;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background: #fff;">
                    <div class="full text_align_right_img">
                        <img src="{{ asset('assets/images/who.jpg') }}" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2><span class="theme_color">Who we</span> Are</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>
                            BEST IN WEBSITE DEVELOPMENT <br>
                            Lagaster is a Website development company that is focused on providing user-friendly,
                            customized, affordable and the best website designs. Over the past few years Lagaster has
                            managed to develop top of the arch websites and offering unspeakable website development
                            services. Our reputation in website development has grown as we dedicate ourselves to meet our
                            client needs.

                            When you join Lagaster, you will realise our website developers work differently. We believe
                            when creative website developers come together, we can achieve amazing website development. Make
                            it happen.</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="{{ route('services') }}">Learn More ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <hr />
    <!-- section -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div style="padding-left:40%" class="heading_main text_align_left">
                            <h2><span class="theme_color">Our</span> Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <a href="{{ route('website-development') }}">
                            <img class="img-responsive" src="{{ asset('assets/images/optimize.png') }}"
                                alt="website development" />
                            <h4>Website SEO</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <a href="{{ route('application-development') }}">
                            <img class="img-responsive" src="{{ asset('assets/images/mobile.jpg') }}" alt="#" />
                            <h4>Apps Development</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <a href="{{ route('website-development') }}">
                            <img class="img-responsive" src="{{ asset('assets/images/webd.png') }}" alt="#" />
                            <h4>Web Development</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <a href="{{ route('Graphic-Design') }}">
                            <img class="img-responsive" src="{{ asset('assets/images/graphic.jpg') }}"
                                alt="graphic design" />
                            <h4>Graphic Design</h4>
                        </a>
                    </div>
                </div>
            </div>
            <hr>

        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2> <span class="theme_color">Website</span> Development</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>With an experienced team consisting of the best website designers and website developers in
                            Kenya, we consider Lagaster to be the best creative company in Kenya when it comes to web
                            development,Search engine optimisation (SEO), web hosting, website design, web consultancy,
                            domain registration and online digital branding

                            Browser Compatible SEO Friendly ECommerce Ready Simple Clean Code</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="{{ route('about') }}">Read More ></a>
                    </div>
                </div>
                <div class="col-md-6">

                    <img height="100%" width="100%" src="{{ asset('assets/images/site.jpg') }}" alt="#" />

                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color">Why </span>Choose Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div>
                        <div>
                            <img height="140%" width="90%" src="{{ asset('assets/images/optimize.png') }}" alt="">
                            <h4>Website Optimization</h4> <br>
                            <h6>
                                At Lagaster we develop websites that our customers love and keep coming back. Optimization
                                helps in google search ranking.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div>
                        <div>
                            <img height="140%" width="90%" src="{{ asset('assets/images/qos.jpg') }}" alt="">
                            <h4>Quality of Service</h4> <br>
                            <h6>
                                At Lagaster, quality is remembered long after the price is forgotten.We guarantee you the
                                best website designs development.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div>
                        <div>
                            <img height="140%" width="90%" src="{{ asset('assets/images/websecurity.png') }}" alt="">
                            <h4>Website Security</h4> <br>
                            <h6>
                                We develop websites that are free from vulnerabilities like malware, SQL injection or DDos
                                attacks and well suited for security analysys.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div>
                        <div>
                            <img height="140%" width="90%" src="{{ asset('assets/images/price.png') }}" alt="">
                            <h4>Affordable Pricing</h4> <br>
                            <h6>
                                As you may have guessed, we are extremely affordable.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div>
                        <div>
                            <img height="140%" width="90%" src="{{ asset('assets/images/techs.jpg') }}" alt="">
                            <h4>24/7 Technical Support</h4> <br>
                            <h6>
                                We are just a phone call away. Our technical team is available 24/7 to serve you.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div>
                        <div>
                            <img height="140%" width="90%" src="{{ asset('assets/images/graphic.jpg') }}" alt="">
                            <h4>Website Optimization</h4> <br>
                            <h6>
                                At Lagaster we develop websites that our customers love and keep coming back. Optimization
                                helps in google search ranking.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end section -->
@endsection
