@extends('layouts.mainapp')
@section('content')

<div style="background-image: url('assets/images/big-images/4.jpg')">

    <div class="content-section  page-titlebar">
      <div class="container">


        <div class="row">
          <div class="col-lg-12">
            <h1 style="color: white">blog</h1>
            <ol class="breadcrumb">
              <li>
                <a style="text-decoration: none;"  href="/">Home</a>
              </li>
              <li>
                <a style="text-decoration: none;"  href="/blog">blog</a>
              </li>

            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>


     <!-- Posts start -->
     <div class="content-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
              @foreach ($blogs as $blog)

              <div class="col-xs-12 col-sm-4">
                <div class="post preview st-2">
                                <figure class="post-thumbnail">
                <a style="text-decoration: none;"  href="{{route('blogmore.show',$blog->slug)}}">
                    <img href="{{route('blogmore.show',$blog->slug)}}"  src="/storage/blog/{{$blog->image}}" alt="">
                </a>

                  </figure>
                  <div class="post-content">
                    <ul class="meta">
                      <li class="meta-date">Posted on
                      <a style="text-decoration: none;"  href="{{route('blogmore.show',$blog->slug)}}">{{$blog->created_at}}</a>
                      </li>
                      {{-- <li class="meta-category">in
                        <a style="text-decoration: none;"  href="#">News & Events</a>
                      </li> --}}
                    </ul>
                    <h4
                     class="post-title">
                      <a style="text-decoration: none;"  href="{{route('blogmore.show',$blog->slug)}}">{{$blog->title}}</a><br>
                      <a style="text-decoration: none;"  href="{{route('blogmore.show',$blog->slug)}}">{{$blog->subtitle}}</a>
                    </h4>

                <a style="text-decoration: none;"  href="{{route('blogmore.show',$blog->slug)}}" class="color-link">Read more
                        <i class="fa fa-long-arrow-right"></i>
                      </a>

                  </div>
                </div>
              </div>

              @endforeach

                {{-- <div class="col-xs-12 col-sm-4">
                  <div class="post preview st-2">
                    <figure class="post-thumbnail">

                      <img  src="assets/images/big-images/5.jpg" alt="">
                    </figure>
                    <div class="post-content">
                      <ul class="meta">
                        <li class="meta-date">Posted on
                          <a style="text-decoration: none;"  href="#">4th May, 2018</a>
                        </li>
                        <li class="meta-category">in
                          <a style="text-decoration: none;"  href="#">News & Events</a>
                        </li>
                      </ul>
                      <h4 class="post-title">
                        <a style="text-decoration: none;"  href="#">Why is Walton Consulting the most trending thing now?</a>
                      </h4>

                        <a style="text-decoration: none;"  href="#" class="color-link">Read more
                          <i class="fa fa-long-arrow-right"></i>
                        </a>

                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="post preview st-2">
                      <figure class="post-thumbnail">

                        <img  src="assets/images/big-images/5.jpg" alt="">
                      </figure>
                      <div class="post-content">
                        <ul class="meta">
                          <li class="meta-date">Posted on
                            <a style="text-decoration: none;"  href="#">4th May, 2018</a>
                          </li>
                          <li class="meta-category">in
                            <a style="text-decoration: none;"  href="#">News & Events</a>
                          </li>
                        </ul>
                        <h4 class="post-title">
                          <a style="text-decoration: none;"  href="#">Why is Walton Consulting the most trending thing now?</a>
                        </h4>

                          <a style="text-decoration: none;"  href="#" class="color-link">Read more
                            <i class="fa fa-long-arrow-right"></i>
                          </a>

                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>
             <div style="padding-left:34%">
                {{$blogs->links()}}
             </div>
              <div class="row">
                <div class="col-lg-12">

                </div>
              </div>
            </div>
            <div class="col-md-4">

            </div>
          </div>
        </div>
      </div>
      <!-- Posts end -->

@endsection
