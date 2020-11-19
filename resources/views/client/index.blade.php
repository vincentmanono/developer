@extends('layouts.mainapp')
@section('content')
@include('messages')
<div class="homepage-slider">
    <div class="homepage-slider-nav">
        <a id="homepage-slider-left" href="#">
            <span class="wicon-iconmonstr-angel-left-circle-thin"></span>
        </a>
    </div>
    <div id="homepage-slider" class="owl-theme owl-carousel">
        <!-- Homepage slider item start -->
        <div class="homepage-slider-item">
            <img src="{{ asset('assets/images/big-images/1.jpg') }}" alt="" class="homepage-slider-item-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="homepage-slider-item-content">
                            <div class="text-1">a leading provider of</div>
                            <div class="text-2">website services</div>
                            <div class="text-1">for your business</div>
                            <p class="text-3">Empowering business through people.</p>
                            <p class="homepage-slider-item-link">
                                <a style="text-decoration: none;"  href="#">Learn more
            <i class="fa fa-long-arrow-right"></i>
          </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Homepage slider item end -->
        <!-- Homepage slider item start -->
        <div class="homepage-slider-item">
            <img src="assets/images/big-images/2.jpg" alt="" class="homepage-slider-item-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="homepage-slider-item-content">
                            <div class="text-1">we focus on </div>
                            <div class="text-2">passion & leadership</div>
                            <p class="text-3">We transform organisations once at a time.</p>
                            <p class="homepage-slider-item-link">
                                <a style="text-decoration: none;"  href="#">Learn more
            <i class="fa fa-long-arrow-right"></i>
          </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Homepage slider item end -->
        <!-- Homepage slider item start -->
        <div class="homepage-slider-item">
            <img src="assets/images/big-images/3.jpg" alt="" class="homepage-slider-item-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="homepage-slider-item-content">
                            <div class="text-1">we help organisations</div>
                            <div class="text-2">manage changes</div>
                            <p class="text-3">Independent global bisuness advisory firm.</p>
                            <p class="homepage-slider-item-link">
                                <a style="text-decoration: none;"  href="#">Learn more
            <i class="fa fa-long-arrow-right"></i>
          </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Homepage slider item end -->
    </div>
    <div class="homepage-slider-nav right">
        <a id="homepage-slider-right" href="#">
            <span class="wicon-iconmonstr-angel-right-circle-thin"></span>
        </a>
    </div>
</div>
<!-- Homepage slider end -->
<!-- Intro start -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="text-decor-1"><h4>welcome to Lagaster web development company</h4></p>
                <p class="text-decor-2">From impressive designs to advanced functionality,
                     we  design user-friendly and secure websites.</p>
                <p>
                    <a style="text-decoration: none;"  href="/contact-us" class="btn btn-1">
                        <i class="fa fa-file"></i> Contact Us</a>
                    {{-- <a style="text-decoration: none;"  href="#" class="btn btn-2">get in touch</a> --}}
                </p>
            </div>
            <div class="col-md-6">
                <h3><label for="">About Us</label></h3>
                <p>Nullam placerat, sapien et eleifend condimentum, felis nisi pretium dolor, in pharetra tellus ipsum eget odio. Maecenas id cursus dui. Duis fermentum tortor id sapien tempor, quis placerat nunc gravida.</p>
                <p>Integer a diam sem. Vivamus vehicula consequat leo, ut cursus tellus iaculis et. Etiam volutpat bibendum dui at ullamcorper. Etiam dignissim cursus sem quis pharetra. Morbi suscipit placerat odio, id congue arcu consequat
                    quis. Curabitur congue nibh tempus consectetur blandit. Praesent ipsum lectus, tempus sed tellus et, finibus volutpat orci. Vivamus lobortis consectetur sem nec sollicitudin. </p>
            </div>
        </div>
    </div>
</div>
<!-- Intro end -->
<!-- Benefits start -->
<div class="content-section palette-4-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 icon-box v1">
                <p>
                    <span class="wicon-iconmonstr-globe-thin"></span>
                </p>
                <div>
                    <h4 class="title">who we are</h4>
                    <p>Vivamus porta vulputate nisl, nec consectetur est ornare pharetra arcu erat sit amet. </p>
                    <p>
                        <a style="text-decoration: none;"  href="#" class="color-link">Read more...</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 icon-box v1">
                <p>
                    <span class="wicon-iconmonstr-light-bulb-thin"></span>
                </p>
                <div>
                    <h4 class="title">what we do</h4>
                    <p>Nullam hendrerit, metus porttitor placerat tincidunt, ante ex venenatis amet lectus. </p>
                    <p>
                        <a style="text-decoration: none;"  href="#" class="color-link">Read more...</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 icon-box v1">
                <p>
                    <span class="wicon-iconmonstr-database-thin"></span>
                </p>
                <div>
                    <h4 class="title">how we do it</h4>
                    <p>Vestibulum vitae turpis ut nibh scelerisque neque tincidunt pharetra sollicitudin orci. </p>
                    <p>
                        <a style="text-decoration: none;"  href="#" class="color-link">Read more...</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Benefits end -->
<!-- Services start -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-section-header center">
                    <h2 class="title">services we provide</h2>
                    <p class="description">We help you to communicate the value og your project so you get the buy-in and adoption you need to success.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="index-1-services" class="owl-theme owl-carousel">
                    <div class="icon-box v2">

                        <span class="wicon-iconmonstr-bar-chart-thin"></span>
                        <p class="title">growth and innovations</p>
                        <p>Nullam libero erat, aliquam nec pretium vitae, commodo eget nulla.</p>
                    </div>
                    <div class="icon-box v2">

                        <span class="wicon-iconmonstr-gear-thin"></span>
                        <p class="title">operational management</p>
                        <p>Vestibulum vitae metus bibendum, cursus ante sed, sollicitudin magna.</p>
                    </div>
                    <div class="icon-box v2">

                        <span class="wicon-iconmonstr-folder-full-thin"></span>
                        <p class="title">organizational excellence</p>
                        <p>Duis non diam quis tortor sollicitudin laoreet ut eget massa.</p>
                    </div>
                    <div class="icon-box v2">

                        <span class="wicon-iconmonstr-briefcase-thin"></span>
                        <p class="title">strategy & optimisation</p>
                        <p>Fusce turpis ante, ornare at bibendum non, venenatis vel justo.</p>
                    </div>
                    <div class="icon-box v2">

                        <span class="wicon-iconmonstr-info-thin"></span>
                        <p class="title">risk management</p>
                        <p>Mauris diam urna, egestas in est nec, placerat ornare purus vitae.</p>
                    </div>
                    <div class="icon-box v2">

                        <span class="wicon-iconmonstr-computer-thin"></span>
                        <p class="title">technology & innovations</p>
                        <p>Phasellus vitae dui a nisl lobortis efficitur a nec convallis diam.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="index-1-services-nav" class="owl-nav center"></div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->
<!-- CTA start -->
<div class="content-section image-bg image-bg-10 cta v1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-1">empowering business through people</p>
                <p class="text-2">a leading provider of website services</p>
                <p>Fusce aliquam mollis velit a ornare. Aenean lobortis sem sed dapibus laoreet. Fusce ac luctus velit.
                    <br>Donec tempor, diam a rutrum vestibulum, tortor metus pulvinar diam, ac eleifend ligula dolor non enim. </p>
                <p>
                    <a style="text-decoration: none;"  href="/contact-us" class="btn btn-1">
                        <i class="fa fa-file"></i> Contact Us</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- CTA end -->
<!-- Recent cases start -->
<div class="content-section decorated-bg">
    <div class="container">
        <div class="row index-1-recent-cases-content">
            <div class="col-md-12 col-lg-4">
                <div class="content-section-header left">
                    <h2 class="title">Website Solutions</h2>
                    <p class="description">We offer a wide range of website solutions.</p>
                </div>
                <div class="clearfix"></div>
                <div id="index-1-recent-cases-nav" class="owl-nav left"></div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="index-1-recent-cases">
                    <div id="index-1-recent-cases" class="owl-theme owl-carousel">
                        <div class="recent-cases-item v1">
                            <figure>
                                <div class="hover">
                                    <a style="text-decoration: none;"  href="assets/images/big-images/13.jpg" class="lightbox-images">
                                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                                    </a>
                                </div>
                                <img src="assets/images/big-images/13.jpg" alt="">
                            </figure>
                            <div class="details">
                                <div>
                                    <p class="title">
                                        <a style="text-decoration: none;"  href="#">Jeans Unlilmited</a>
                                    </p>
                                    <p class="text-decor-1">baton rouge, la</p>
                                    <p>Morbi enim neque, condimentum quis interdum ac, consectetur quis nibh. </p>
                                </div>
                                <p>
                                    <a style="text-decoration: none;"  href="#" class="color-link">Learn more...</a>
                                </p>
                            </div>
                        </div>
                        <div class="recent-cases-item v1">
                            <figure>
                                <div class="hover">
                                    <a style="text-decoration: none;"  href="assets/images/big-images/12.jpg" class="lightbox-images">
                                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                                    </a>
                                </div>
                                <img src="assets/images/big-images/12.jpg" alt="">
                            </figure>
                            <div class="details">
                                <div>
                                    <p class="title">
                                        <a style="text-decoration: none;"  href="#">Monmax</a>
                                    </p>
                                    <p class="text-decor-1">Rehoboth, MA 02769 </p>
                                    <p>Suspendisse ut metus tellus. Phasellus viverra vitae nunc non consequat. </p>
                                </div>
                                <p>
                                    <a style="text-decoration: none;"  href="#" class="color-link">Learn more...</a>
                                </p>
                            </div>
                        </div>
                        <div class="recent-cases-item v1">
                            <figure>
                                <div class="hover">
                                    <a style="text-decoration: none;"  href="assets/images/big-images/14.jpg" class="lightbox-images">
                                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                                    </a>
                                </div>
                                <img src="assets/images/big-images/14.jpg" alt="">
                            </figure>
                            <div class="details">
                                <div>
                                    <p class="title">
                                        <a style="text-decoration: none;"  href="#">Pomeroy's</a>
                                    </p>
                                    <p class="text-decor-1">Norris City, IL 62869</p>
                                    <p>Pellentesque vitae nisl eros. Ut convallis ipsum et diam sagittis suscipit. </p>
                                </div>
                                <p>
                                    <a style="text-decoration: none;"  href="#" class="color-link">Learn more...</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent cases end -->
<!-- Latest blog posts start -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="content-section-header center">
                    <h2 class="title">latest blog posts</h2>
                    <p class="description">Stay informed about what is happening.</p>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
     @foreach ($bloggers as $blogger)
     <div class="post big-preview">
        <figure class="post-thumbnail">
            <div class="hover">
                <a style="text-decoration: none;"  href="/storage/blog/{{$blogger->image}}" class="lightbox-images">
                    <span class="wicon-iconmonstr-zoom-in-thin"></span>
                </a>
            </div>
            <img src="/storage/blog/{{$blogger->image}}" alt="lagaster">
        </figure>
        <ul class="meta">
            <li class="meta-date">
                <a style="text-decoration: none;"  href="{{route('blogmore.show',$blogger->slug)}}">Posted on {{$blogger->created_at}}</a>
            </li>

        </ul>
        <h3 class="post-title">
            <a style="text-decoration: none;"  href="{{route('blogmore.show',$blogger->slug)}}">{{$blogger->title}}</a><br>
            <a style="text-decoration: none;"  href="{{route('blogmore.show',$blogger->slug)}}">{{$blogger->subtitle}}</a>
        </h3>
        <p class="read-link">
            <a style="text-decoration: none;"  href="{{route('blogmore.show',$blogger->slug)}}">Read more
<i class="fa"></i>
</a>
        </p>
    </div>
     @endforeach
            </div>
            <div class="col-md-6">

                @foreach ($blogs as $blog)
                <div class="post preview">
                    <figure class="post-thumbnail">
                        <div class="hover">
                            <a style="text-decoration: none;"  href="/storage/blog/{{$blog->image}}" class="lightbox-images">
                                <span class="wicon-iconmonstr-zoom-in-thin"></span>
                            </a>
                        </div>
                        <a href="{{route('blogmore.show',$blog->slug)}}"><img src="/storage/blog/{{$blog->image}}" alt=""></a>

                    </figure>
                    <div class="post-content">
                        <ul class="meta">
                            <li class="meta-date">
                                <a style="text-decoration: none;"  href="{{route('blogmore.show',$blog->slug)}}">Posted on {{$blog->created_at}}</a>
                            </li>

                        </ul>
                        <h4 class="post-title">
                            <a style="text-decoration: none;"  href="{{route('blogmore.show',$blog->slug)}}"><label for="">{{$blog->title}}</label></a><br>
                        <a style="text-decoration: none;"  href="{{route('blogmore.show',$blog->slug)}}">{{$blog->subtitle}}</a>
                        </h4>
                    </div>
                </div>
                @endforeach
                {{-- <div class="post preview">
                    <figure class="post-thumbnail">
                        <div class="hover">
                            <a style="text-decoration: none;"  href="assets/images/big-images/3.jpg" class="lightbox-images">
                                <span class="wicon-iconmonstr-zoom-in-thin"></span>
                            </a>
                        </div>
                        <img src="assets/images/big-images/3.jpg" alt="">
                    </figure>
                    <div class="post-content">
                        <ul class="meta">
                            <li class="meta-date">Posted on
                                <a style="text-decoration: none;"  href="#">5th May, 2018</a>
                            </li>
                            <li class="meta-category">in
                                <a style="text-decoration: none;"  href="#">News & Events</a>
                            </li>
                        </ul>
                        <h4 class="post-title">
                            <a style="text-decoration: none;"  href="#">Why is company website the most trending thing right now?</a>
                        </h4>
                    </div>
                </div>
                <div class="post preview">
                    <figure class="post-thumbnail">
                        <div class="hover">
                            <a style="text-decoration: none;"  href="assets/images/big-images/12.jpg" class="lightbox-images">
                                <span class="wicon-iconmonstr-zoom-in-thin"></span>
                            </a>
                        </div>
                        <img src="assets/images/big-images/12.jpg" alt="">
                    </figure>
                    <div class="post-content">
                        <ul class="meta">
                            <li class="meta-date">Posted on
                                <a style="text-decoration: none;"  href="#">12th May, 2018</a>
                            </li>
                            <li class="meta-category">in
                                <a style="text-decoration: none;"  href="#">News & Events</a>
                            </li>
                        </ul>
                        <h4 class="post-title">
                            <a style="text-decoration: none;"  href="#">This is how company website will look like in 10 years time</a>
                        </h4>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
<!-- Latest blog posts end -->
<!-- Partners start -->

<div class="content-section palette-4-bg">
    <div class="container">
        <div class="row">
            <p>
                <a style="text-decoration: none; margin-left:40%"   class="btn btn-2">Our Partners</a>
            </p>
            <div class="col-lg-12">
                <div class="partners-wrapper">
                    <div class="partners-nav left owl-nav">
                        <button id="partners-prev" type="button" role="presentation" class="owl-prev">
        <span class="wicon-iconmonstr-angel-left-circle-thin"></span>
      </button>
                    </div>
                    <div id="partners" class="partners-content owl-carousel owl-theme">
                        <img src="assets/images/partners/1.png" alt="">
                        <img src="assets/images/partners/2.png" alt="">
                        <img src="assets/images/partners/3.png" alt="">
                        <img src="assets/images/partners/4.png" alt="">
                        <img src="assets/images/partners/5.png" alt="">
                        <img src="assets/images/partners/6.png" alt="">
                        <img src="assets/images/partners/7.png" alt="">
                        <img src="assets/images/partners/8.png" alt="">
                        <img src="assets/images/partners/9.png" alt="">
                    </div>
                    <div class="partners-nav right owl-nav">
                        <button id="partners-next" type="button" role="presentation" class="owl-next">
        <span class="wicon-iconmonstr-angel-right-circle-thin"></span>
      </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->
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
            <div class="col-md-6 col-lg-6 subsection-fix-sm subsection-fix-xs">
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
            </div>

        </div>
    </div>
</div>
<!-- Quick faq & contact form end -->
<!-- CTA start -->
<div class="content-section image-bg image-bg-11 cta v1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-1">we're knowledgeable about</p>
                <p class="text-2">making benefits higher</p>
                <p>A leading provider of website services.</p>
                <p>
                    <a style="text-decoration: none;"  href="/contact-us" class="btn btn-1">
                        <i class="fa fa-file"></i> Contact Us</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- CTA end -->
</div>

@endsection

@section('title')
<title>Home|Lagaster Website Developers</title>
@endsection
@section('metatag')
