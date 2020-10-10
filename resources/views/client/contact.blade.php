@extends('layouts.mainapp')
@section('content')

  <!-- Page titlebar start -->
<div style="background-image: url('assets/images/big-images/4.jpg')">

  <div class="content-section  page-titlebar">
    <div class="container">


      <div class="row">
        <div class="col-lg-12">
          <h1 style="color: white">contact us</h1>
          <ol class="breadcrumb">
            <li>
              <a style="text-decoration: none;"  href="/">Home</a>
            </li>
            <li>
              <a style="text-decoration: none;"  href="/contact">Contact</a>
            </li>

          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
  <br><br><br><br><br>
  <!-- Page titlebar end -->
  {{-- <!-- Map start -->
  <div id="map-canvas" class="map-canvas content-section"></div>
  <!-- Map end --> --}}
  <!-- Contacts start -->

  <div class="content-section contacts-page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contacts-page-content">
            <div class="content-block palette-2-bg left">
              <h3>our contacts</h3>
              <div class="widget widget-contacts">
                <div class="widget-content">
                  <p class="title text-heading">Lagaster Web Developers</p>
                  <p class="address">1064 Maxwell Street
                    <br>Windsor, CT 06095</p>
                  <p class="phone">1 (860) 729-1526</p>
                  <p class="email">
                    <a style="text-decoration: none;"  href="mailto:info@lagaster.com">info@lagaster.com</a>
                  </p>
                  <p class="links">
                    <a style="text-decoration: none;"  href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a style="text-decoration: none;"  href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a style="text-decoration: none;"  href="#">
                      <i class="fa fa-linkedin"></i>
                    </a>
                    <a style="text-decoration: none;"  href="#">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a style="text-decoration: none;"  href="#">
                      <i class="fa fa-vimeo"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="content-block palette-4-bg right">
              <h3>send us a message</h3>
              <p>Feel free to contact us today.</p>
              <div class="row">
                @include('messages')
              <form  enctype="multipart/form-data" action="{{route('contact.post')}}" method="post">
                @csrf
                @method('POST')
                  <div class="form-group contacts-form-result">
                    <div class="col-xs-12">
                      <strong></strong>
                    </div>
                  </div>
                  <div class="form-group clearfix">
                    <div class="col-xs-12 col-sm-6">
                      <input type="text" placeholder="Your names *" name="name"  required class="form-control">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <input type="email" placeholder="Your e-mail address *" required name="email" class="form-control">
                    </div>
                  </div>
                  <div class="form-group clearfix">
                    <div class="col-xs-12 col-sm-6">
                      <input type="tel" placeholder="Phone number..." required name="phone" class="form-control">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <input type="text" placeholder="Subject..." required name="subject" class="form-control">
                    </div>
                  </div>
                  <div class="form-group clearfix">

                    <div class="col-xs-12">
                        Message
                      <textarea placeholder="Your message *" id="summary-ckeditor" required  name="message" class="form-control"> </textarea>
                    </div>
                  </div>
                  <div class="form-group clearfix">
                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-2">Send</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection

@section('title')
<title>Contact|Lagaster Website Developers</title>
@endsection
@section('metatag')
