<header class="top-header">
    {{-- <div class="header_top">

        <div class="container">
            <div class="row">
                <div class="logo_section">
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo.png') }}"
                            alt="image"></a>
                </div>
                <div class="site_information">
                    <ul>
                        <li><a href="mailto:exchang@gmail.com"><img src="{{ asset('assets/images/mail_icon.png') }}"
                                    alt="#" />exchang@gmail.com</a></li>
                        <li><a href="tel:exchang@gmail.com"><img src="{{ asset('assets/images/phone_icon.png') }}"
                                    alt="#" />+7123569847</a></li>
                        <li><a class="join_bt" href="#">Join us</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div> --}}
    @include('messages')
    <div class="header_bottom">
        <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #ff880e;">
                    <nav class="navbar header-nav navbar-expand-lg">
                        <div class="menu_section">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                                aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                                <ul class="navbar-nav">
                                    <li><a class="nav-link active" href="{{ route('index') }}">Home</a></li>
                                    <li><a class="nav-link" href="{{ route('about') }}">About</a></li>
                                    <li><a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a></li>
                                    <li><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                                    <li><a class="nav-link" href="{{ route('blog.home') }}">News</a></li>
                                    <li><a class="nav-link" href="{{ route('contact-us') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    {{-- <div class="search-box">
                        <input type="text" class="search-txt" placeholder="Search">
                        <a class="search-btn">
                            <img src="{{ asset('assets/images/search_icon.png') }}" alt="#" />
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</header>
