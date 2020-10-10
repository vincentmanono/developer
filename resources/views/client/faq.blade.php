@extends('layouts.mainapp')
@section('content')

<div style="background-image: url('assets/images/big-images/4.jpg')">

    <div class="content-section  page-titlebar">
      <div class="container">


        <div class="row">
          <div class="col-lg-12">
            <h1 style="color: white">Portfolio</h1>
            <ol class="breadcrumb">
              <li>
                <a style="text-decoration: none;"  href="/">Home</a>
              </li>
              <li>
                <a style="text-decoration: none;"  href="/faq">Faq</a>
              </li>

            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
    {{-- content --}}


<!-- Quick faq & contact form start -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="content-section-header left">
                    <h2 class="title">quick website faq</h2>
                    <p class="description">The most common questions on website development.</p>
                </div>
                <div class="clearfix"></div>
                <div data-rt-accordion data-rt-accordion-toggle="on" data-rt-accordion-active="" class="rt-accordion">
                    <div data-rt-accordion-item class="rt-accordion-item">
                        <header>
                            <p class="title">How much does a new website cost?</p>
                        </header>
                        <div class="content">
                            <p>Etiam vel leo lacus. Fusce vestibulum viverra justo, vel dictum lorem venenatis at. Sed eleifend, quam sed commodo varius, mauris magna tristique justo, et volutpat leo urna eget justo. Mauris iaculis dolor
                                quis porta finibus.
                            </p>
                            <p>Donec id molestie nisl. Suspendisse nisi leo, elementum eu suscipit non, mollis id sapien. Nunc at nibh urna. </p>
                        </div>
                    </div>
                    <div data-rt-accordion-item class="rt-accordion-item">
                        <header>
                            <p class="title">
                                How long does it take to develop a website?</p>
                        </header>
                        <div class="content">
                            <p>Etiam vel leo lacus. Fusce vestibulum viverra justo, vel dictum lorem venenatis at. Sed eleifend, quam sed commodo varius, mauris magna tristique justo, et volutpat leo urna eget justo. Mauris iaculis dolor
                                quis porta finibus.
                            </p>
                        </div>
                    </div>
                    <div data-rt-accordion-item class="rt-accordion-item">
                        <header>
                            <p class="title">
                                When do i pay?</p>
                        </header>
                        <div class="content">
                            <p>Etiam vel leo lacus. Fusce vestibulum viverra justo, vel dictum lorem venenatis at. Sed eleifend, quam sed commodo varius, mauris magna tristique justo, et volutpat leo urna eget justo. Mauris iaculis dolor
                                quis porta finibus.
                            </p>
                            <p>Donec id molestie nisl. Suspendisse nisi leo, elementum eu suscipit non, mollis id sapien. Nunc at nibh urna. </p>
                        </div>
                    </div>
                    <div data-rt-accordion-item class="rt-accordion-item">
                        <header>
                            <p class="title">Can my website be hosted immediately after development?</p>
                        </header>
                        <div class="content">
                            <p>Etiam vel leo lacus. Fusce vestibulum viverra justo, vel dictum lorem venenatis at. Sed eleifend, quam sed commodo varius, mauris magna tristique justo, et volutpat leo urna eget justo. Mauris iaculis dolor
                                quis porta finibus.
                            </p>
                            <p>Donec id molestie nisl. Suspendisse nisi leo, elementum eu suscipit non, mollis id sapien. Nunc at nibh urna. </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-lg-6 subsection-fix-sm subsection-fix-xs">
                <div class="content-block palette-2-bg">
                    <h3 class="text-center">request service</h3>
                <form  method="post" action="{{route('contact.post')}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group contacts-form-result">
                            <strong></strong>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Your name..." required name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your e-mail..." required name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="subject..." required name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Your phone..." required name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea rows="10" placeholder="Your message..." required name="message" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-1">Send Your Request</button>
                        </div>
                    </form>
                </div>
            </div> --}}
            <div class="col-md-6 col-lg-6">
                <div class="content-section-header left">
                    <h2 class="title">quick website faq</h2>
                    <p class="description">The most common questions on website development.</p>
                </div>
                <div class="clearfix"></div>
                <div data-rt-accordion data-rt-accordion-toggle="on" data-rt-accordion-active="" class="rt-accordion">
                    <div data-rt-accordion-item class="rt-accordion-item">
                        <header>
                            <p class="title">
                                How much does website hosting cost?</p>
                        </header>
                        <div class="content">
                            <p>Etiam vel leo lacus. Fusce vestibulum viverra justo, vel dictum lorem venenatis at. Sed eleifend, quam sed commodo varius, mauris magna tristique justo, et volutpat leo urna eget justo. Mauris iaculis dolor
                                quis porta finibus.
                            </p>
                            <p>Donec id molestie nisl. Suspendisse nisi leo, elementum eu suscipit non, mollis id sapien. Nunc at nibh urna. </p>
                        </div>
                    </div>
                    <div data-rt-accordion-item class="rt-accordion-item">
                        <header>
                            <p class="title">
                                Will my website be mobile friendly?</p>
                        </header>
                        <div class="content">
                            <p>Etiam vel leo lacus. Fusce vestibulum viverra justo, vel dictum lorem venenatis at. Sed eleifend, quam sed commodo varius, mauris magna tristique justo, et volutpat leo urna eget justo. Mauris iaculis dolor
                                quis porta finibus.
                            </p>
                        </div>
                    </div>
                    <div data-rt-accordion-item class="rt-accordion-item">
                        <header>
                            <p class="title">
                                How do i purchase a domain?</p>
                        </header>
                        <div class="content">
                            <p>Etiam vel leo lacus. Fusce vestibulum viverra justo, vel dictum lorem venenatis at. Sed eleifend, quam sed commodo varius, mauris magna tristique justo, et volutpat leo urna eget justo. Mauris iaculis dolor
                                quis porta finibus.
                            </p>
                            <p>Donec id molestie nisl. Suspendisse nisi leo, elementum eu suscipit non, mollis id sapien. Nunc at nibh urna. </p>
                        </div>
                    </div>
                    <div data-rt-accordion-item class="rt-accordion-item">
                        <header>
                            <p class="title">
                                Will i get help on my website after sometime?</p>
                        </header>
                        <div class="content">
                            <p>Etiam vel leo lacus. Fusce vestibulum viverra justo, vel dictum lorem venenatis at. Sed eleifend, quam sed commodo varius, mauris magna tristique justo, et volutpat leo urna eget justo. Mauris iaculis dolor
                                quis porta finibus.
                            </p>
                            <p>Donec id molestie nisl. Suspendisse nisi leo, elementum eu suscipit non, mollis id sapien. Nunc at nibh urna. </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Quick faq & contact form end -->

</div>

@endsection
@section('title')
<title>Faq|Lagaster Website Developers</title>
@endsection
@section('metatag')

