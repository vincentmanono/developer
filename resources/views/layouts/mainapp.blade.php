<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,800" rel="stylesheet"> -->

    @yield('title')

@yield('metatag')
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-1.css') }}" id="template-skin">

    {{--  slider  --}}
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
          max-width: 1300px;
          position: relative;
          margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }

        @keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
        }
        </style>
    {{--  end of slider  --}}
</head>

<body>
    <!-- Preload start -->
    <!-- Preload end -->
    <!-- Settings start -->

    <!-- Settings end -->
    <!-- To the top start -->
    <div id="to-the-top" class="to-the-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>
    <!-- To the top end -->
    <!-- Mobile menu start -->
    <aside id="offcanvas-menu" data-pushbar-id="left" class="pushbar from_left">
        <h4 class="title">
            <span>Site Menu</span>
            <span data-pushbar-close> </span>
        </h4>
    </aside>
    <!-- Mobile menu end -->
    <div id="page" class="page">
        <div id="content-wrapper" class="content-wrapper">
            <div class="content-wrapper-inner">
                <!-- Header start -->
               @include('includes.header')
                <!-- Header end -->
                <!-- Homepage slider start -->
            {{-- body --}}
            @yield('content')
            {{-- end body --}}
            <!-- Footer start -->
           @include('includes.footer')
            <!-- Footer end -->
        </div>
    </div>

    {{--  script slider  --}}

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
    </script>
    {{--  end scrpipt slider  --}}
    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/framework.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpVQEdCmd9aY_-N6920-wilfScyBwS-Lw&amp;callback=initMap"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
</body>
</html>
