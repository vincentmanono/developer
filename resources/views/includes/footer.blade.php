<footer class="site-footer site-footer-1">
    <div class="container">
        <div class="row site-footer-content">
            <div class="col-lg-4 col-md-4 site-footer-logo">
                <div>
                    <!-- Logo start -->
                    <a href="index.html" title="Walton" class="site-logo">
                        <div class="logo-img">
                            <img src="assets/images/logo.png" alt="Walton">
                        </div>
                        <div class="name-and-tagline">
                            <div class="name">Lagaster</div>
                            <div class="tagline">Website solutions </div>                       </div>
                    </a>
                    <!-- Logo end -->
                    <p>Lagaster is a Website development company that is
                         focused on providing user-friendly, customized,
                         affordable and the best website designs. Over the
                          past few years Lagaster has managed to develop top
                           of the arch websites and offering best website
                            development services. Our reputation in website development
                             has grown as we dedicate ourselves to meet our client needs.
                    </p>
                </div>
                <div>
                   
                    <label for="">Subscribe to our newsletter</label>
                <form action="{{route('subscribe.store')}}" method="post">
                        @csrf
                        @method('POST')
                        <input type="text" placeholder="Enter your email address" name="email" id="">
                        <button type="submit" class="btn  btn-sm btn-primary ">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-md-push-1">
                <div class="widget widget-contacts">
                    <h4 class="widget-title">Contact Us</h4>
                    <div class="widget-content">
                        <p class="title text-heading">Walton Consulting Inc.</p>
                        <p class="address">1064 Maxwell Street
                            <br>Windsor, CT 06095</p>
                        <p class="phone">1 (860) 729-1526</p>
                        <p class="email">
                            <a href="#">info@lagaster.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-push-1">
                <div class="widget widget-follow">
                    <h4 class="widget-title">follow us</h4>
                    <div class="widget-content">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        <p class="links">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p style="text-align: center"> Copyright @ {{date("Y")}}
        <a href="">lagaster.com</a></p>

</footer>
