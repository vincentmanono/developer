@extends('layouts.mainapp')
@section('content')

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            {{-- <h2><span class="theme_color"></span>Services</h2>
                            --}}
                            <h4 class="theme_color">
                                Our website developers deliver quality website that stay within the predefined budget by
                                identifying and adapting to changes much earlier in the entire process, avoiding
                                irreversible
                                stages where the cost of changes is higher.
                            </h4>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="card col-md-3 col-sm-6 col-xs-12">
                    <img class="card-img-top" src="/assets/images/webd.png" alt="Website Development">

                    <div class="card-body">
                        <h5 class="card-title"> <a href="{{ route('website-development') }}">Website Development</a> </h5>
                        <p class="card-text">Looking for Website design services in Kenya? Lagaster has experienced and
                            highly educated website developers ready to
                            work with you in implementing your website idea or design.
                            At Lagaster we ensure that your website is visualy
                            appealing secure from any vulnerability.</p>
                    </div>
                </div>
                <div class="card col-md-3 col-sm-6 col-xs-12">
                    <a href="{{ route('network-management') }}">
                        <img class="card-img-top" src="/assets/images/service_02.jpg" alt="Network Engineering">

                    </a>

                    <div class="card-body">
                        <a href="{{ route('network-management') }}">
                            <h5 class="card-title">Network Engineering</h5>
                        </a>

                        <p class="card-text">
                            At Lagaster we deal with network related issues.
                            We design, install and support advanced solutions
                            that will enable you to enhance business
                            productivity.
                            We provide professional network support
                            and in house diagnostics 24/7.
                        </p>
                    </div>
                </div>
                <div class="card col-md-3 col-sm-6 col-xs-12">
                    <a href="{{ route('Graphic-Design') }}"><img class="card-img-top" src="/assets/images/service_03.jpg"
                            alt=""></a>


                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('Graphic-Design') }}">Graphic Design</a> </h5>
                        <p class=" card-text">We offer Graphic Design Kenya.
                            Ourskilled and creative team of professional graphic designers in Kenya will
                            design the best graphics for your project,
                            creative design work or any graphic work.
                            Our logo designers will ensure you get the perfect logo for your organization.
                        </p>
                    </div>
                </div>
                <div class="card col-md-3 col-sm-6 col-xs-12">
                    <a href="{{ route('application-development') }}"><img class="card-img-top"
                            src="/assets/images/mobile.jpg" alt=""></a>

                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('application-development') }}">Android Application
                                Development</a></h5>
                        <p class="card-text">
                            We develop user-friendly Android Apps using latest
                            technology in the market whilst following industry standards.
                            We ensure that they offer the best User Interface and enhanced digital experience
                            in the field of business for your organisation.
                        </p>
                    </div>

                </div>





            </div>
            <div class="row margin-top_30">
                <div class="col-sm-12">
                    <div class="full">
                        <div class="center">
                            <a class="main_bt" href="{{ route('about') }}">See More ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

@endsection
