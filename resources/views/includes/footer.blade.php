<footer class="footer-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 white_fonts">
                <div class="row" >
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <h6 style="text-align: justify">
                                Lagaster is a Website development company that is focused on providing user-friendly,
                                customized, affordable and the best website designs. Over the past few years Lagaster
                                has managed to develop top of the arch websites and offering best website development
                                services. Our reputation in website development has grown as we dedicate ourselves to
                                meet our client needs.
                            </h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="full">
                            <ul class="menu_footer">
                                <li><a href="{{ route('home') }}">> Home</a></li>
                                <li><a href="{{ route('about') }}">> About</a></li>
                                <li><a href="{{ route('faq') }}">> FAQ</a></li>
                                <li><a href="{{ route('contact-us') }}">> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>Newsletter</h3>
                                <p>Subscribe to our newsletter today.</p>
                                <div class="newsletter_form">

                                    <form action="{{ route('newsletter.store') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <input type="email" placeholder="Your Email" name="email" required="">
                                        <button>Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>Contact us</h3>
                                <ul class="full">
                                    <li><img src="{{ asset('assets/images/i5.png') }}"><span>Juja<br>Thika Kiambu</span>
                                    </li>
                                    <li><img src="{{ asset('assets/images/i6.png') }}"><span>info@lagaster.com</span>
                                    </li>
                                    {{-- <li><img
                                            src="{{ asset('assets/images/i7.png') }}"><span></span></li>
                                    --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" style="background-color: rgb(0, 0, 0)">
            <p style="color: aliceblue; margin-left:40%" class="crp">© Copyrights @ {{ date('Y') }} Lagaster</p>
        </div>

    </div>
</footer>
