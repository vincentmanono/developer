<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from tf.yellowcrow.online/walton/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 15:12:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,800" rel="stylesheet"> -->
    <title>Portfolio Project - Walton Consulting Template</title>
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style-1.css" id="template-skin">
</head>

<body>
    <!-- Preload start -->
    {{-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> --}}
    <!-- Preload end -->
    <!-- Settings start -->
    {{-- <div id="template-settings" class="template-settings">
        <i id="template-settings-open" class="fa fa-cog"></i>
        <div class="template-settings-pane skin-pane">
            <h4>choose skin</h4>
            <ul>
                <li>
                    <a href="#" data-skin="1" class="skin-1">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="2" class="skin-2">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="3" class="skin-3">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="4" class="skin-4">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="5" class="skin-5">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="6" class="skin-6">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="7" class="skin-7">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="8" class="skin-8">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="9" class="skin-9">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="10" class="skin-10">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="11" class="skin-11">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-skin="12" class="skin-12">
                        <span class="c1"></span>
                        <span class="c2"></span>
                        <span class="c3"></span>
                        <span class="c4"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="template-settings-pane layout-pane">
            <h4>page layout</h4>
            <ul>
                <li>
                    <label>
              <input type="radio" name="choose-page-layout" value="wide" checked="checked">
              <span>Wide</span>
            </label>
                </li>
                <li>
                    <label>
              <input type="radio" name="choose-page-layout" value="boxed">
              <span>Boxed</span>
            </label>
                </li>
            </ul>
        </div>
    </div> --}}
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
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/framework.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpVQEdCmd9aY_-N6920-wilfScyBwS-Lw&amp;callback=initMap"></script>
    <script src="assets/js/template.js"></script>
</body>

<!-- Mirrored from tf.yellowcrow.online/walton/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 15:16:50 GMT -->

</html>
