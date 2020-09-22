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
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/blog">blog</a>
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

                    <img  src="/storage/images/{{$blog->image}}" alt="">
                  </figure>
                  <div class="post-content">
                    <ul class="meta">
                      <li class="meta-date">Posted on
                      <a href="#">{{$blog->created_at}}</a>
                      </li>
                      {{-- <li class="meta-category">in
                        <a href="#">News & Events</a>
                      </li> --}}
                    </ul>
                    <h4
                     class="post-title">
                      <a href="#">{{$blog->title}}</a><br>
                      <a href="#">{{$blog->subtitle}}</a>
                    </h4>

                <a href="{{route('blogmore.show',$blog->id)}}" class="color-link">Read more
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
                          <a href="#">4th May, 2018</a>
                        </li>
                        <li class="meta-category">in
                          <a href="#">News & Events</a>
                        </li>
                      </ul>
                      <h4 class="post-title">
                        <a href="#">Why is Walton Consulting the most trending thing now?</a>
                      </h4>

                        <a href="#" class="color-link">Read more
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
                            <a href="#">4th May, 2018</a>
                          </li>
                          <li class="meta-category">in
                            <a href="#">News & Events</a>
                          </li>
                        </ul>
                        <h4 class="post-title">
                          <a href="#">Why is Walton Consulting the most trending thing now?</a>
                        </h4>

                          <a href="#" class="color-link">Read more
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
