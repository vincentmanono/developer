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
                <div class="col-md-8">
                    <div class=""></div>
                    <h1 class="text-center text text-bold text-dark h1">{{ $blog->title }} </h1>

                    <h2 class="text text-dark">{{ $blog->subtitle }} <span class="float-right text text-primary h6">Author
                            <span class="text text-capitalize">{{ $blog->user->name }}</span> </span> </h2>
                    <div>
                        <img class="img-responsive" src="/storage/blog/{{ $blog->image }}" alt="{{ $blog->subtitle }}" />
                    </div>
                    <div>
                        @php
                        echo $blog->body
                        @endphp
                    </div>
                </div>
                <div class="col-md-4">
                    <div>Top 5 news</div>
                    <div>
                        @forelse ($topFiveBlog as $single)
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('blog.single', $single->slug) }}">{{ $single->title }}
                                    </h5>
                                    </a>

                                    <p class="card-text">
                                        <img class="img-responsive" width="100" height="40"
                                            src="/storage/blog/{{ $single->image }}" alt="{{ $single->subtitle }}" />

                                    </p>
                                </div>
                            </div>

                        @empty

                        @endforelse
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end section -->

@endsection
