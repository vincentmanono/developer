@extends('layouts.mainapp')
@section('content')

<!-- Start Banner -->
<div class="section inner_page_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_title">
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- section -->
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                       <h2><span class="theme_color"></span>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

<!-- contact_form -->
<div class="section contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 offset-lg-3">
                <div class="full">
                    <form class="contact_form_inner" action="#">
                        <fieldset>
                            <div class="field">
                                <input type="text" name="name" placeholder="Your name" />
                            </div>
                            <div class="field">
                                <input type="email" name="email" placeholder="Email" />
                            </div>
                            <div class="field">
                                <input type="text" name="phone_no" placeholder="Phone number" />
                            </div>
                            <div class="field">
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <div class="field center">
                                <button>SEND</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact_form -->

@endsection
