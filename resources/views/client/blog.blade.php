@extends('layouts.mainapp')
@section('content')


    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>News</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>News</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @forelse ($blogs as $blog)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="full news_blog">
                            <img class="img-responsive" src="/storage/blog/{{ $blog->image }}" alt="{{ $blog->subtitle }}" />
                            <div class="overlay"><a class="main_bt transparent"
                                    href="{{ route('blog.single', $blog->slug) }}">View</a></div>
                            <div class="blog_details">
                                <h3>{{ $blog->title }}</h3>
                                <p>
                                    @php
                                    Str::of($blog->body)->limit(3)
                                    @endphp
                                </p>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse

            </div>
        </div>
    </div>
    <!-- end section -->

@endsection
