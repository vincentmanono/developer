@extends('layouts.mainapp')
@section('content')


<!-- Start Banner -->
<div class="section inner_page_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_title">
                    <h3>About us</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- section -->
<div class="section layout_padding about_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="full paddding_left_15">
                    <div class="heading_main text_align_left">
                       <h2>Overview</h2>
                    </div>
                </div>
                <div class="full paddding_left_15">
                    <p>
                      Lagaster is a company that was founded on the basis if website and android application development. Lagaster has been a company where clients interact with the developers and provide essential details required for their system to be designed and developed.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full text_align_right_img">
                    <img height="110%" width="100%" src="{{ asset('assets/images/abt.jpg') }}" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

<!-- section -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="full text_align_right_img">
                    <img height="110%" width="100%" src="{{ asset('assets/images/slider.jpg') }}" alt="#" />
                </div>
            </div>
            <div class="col-md-6 layout_padding">
                <div class="full paddding_left_15">
                    <div class="heading_main text_align_left">
                       <h2><span class="theme_color">What</span>We Do</h2>
                    </div>
                </div>
                <div class="full paddding_left_15">
                    <p>
                        We design and develop mobile applications that offer the best digital experience.
                    </p>
                    <p>
                        We also develop professional and competent website design using current technology.
                    </p>
                    <p>
                        We offer the best design and installation of well functioning networks and perform troubleshooting to networks.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

@endsection
