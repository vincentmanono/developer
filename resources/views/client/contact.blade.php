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
    {{-- <div class="section layout_padding">
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
    </div> --}}
    <!-- end section -->

    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <div>

                            @if (count($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    {{ session('success') }}
                                </div>

                            @endif
                        </div>

                        <form class="contact_form_inner" method="POST" action="{{ route('contact.post') }}">

                            @csrf
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Your name" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                    <input type="text" name="phone" placeholder="Phone number" />
                                </div>
                                <div class="field">
                                    <input type="text" name="subject" placeholder="Subject" />
                                </div>
                                <div class="field">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="field center">
                                    <button type="submit">SEND</button>
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
