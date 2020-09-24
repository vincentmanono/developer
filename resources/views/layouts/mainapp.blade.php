<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,800" rel="stylesheet"> -->
    <title>Portfolio Project - Walton Consulting Template</title>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-1.css') }}" id="template-skin">
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
    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/framework.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpVQEdCmd9aY_-N6920-wilfScyBwS-Lw&amp;callback=initMap"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
</body>
</html>
