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
    <div class="container" >
        <div class=" left"style="margin-left: 10%;" >
            <h2 class="title">Common questions on website development</h2>

        </div>
        <div class="row">
            {{-- first column --}}
            <div class="col-md-6 col-lg-6">

                <div class="clearfix"></div>
                <div data-rt-accordion data-rt-accordion-toggle="on" data-rt-accordion-active="2" class="rt-accordion">
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
            {{-- second column --}}
            <div class="col-md-6 col-lg-6">

                <div class="clearfix"></div>
                <div data-rt-accordion data-rt-accordion-toggle="on" data-rt-accordion-active="2" class="rt-accordion">
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

