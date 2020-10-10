@extends('layouts.mainapp')
@section('content')

<div style="background-image: url({{asset('assets/images/big-images/4.jpg')}})">

    <div class="content-section  page-titlebar">
      <div class="container">


        <div class="row">
          <div class="col-lg-12">
            <h1 style="color: white">blog </h1>
            <ol class="breadcrumb">
              <li>
                <a style="text-decoration: none;"  href="/">Home</a>
              </li>
              <li>
                <a style="text-decoration: none;"  href={{route('blog.home')}}>blog</a>
              </li>

            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Page content start -->
  <div class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <!-- Article start -->
          <article class="post single">
            <figure class="post-thumbnail">
            <img  src="/storage/blog/{{$blog->image}}" alt="">
            </figure>
            <header class="article-header">
              <ul class="meta">
                <li class="meta-date">Posted on
                  <a style="text-decoration: none;"  href="#">{{$blog->created_at}}</a>
                </li>
                <li class="meta-category">in
                  <a style="text-decoration: none;"  href="#">News & Events</a>
                </li>
              </ul>

            <h2 class="title">{{$blog->title}}</h2>
            </header>
             <p>
                 @php
                      echo $blog->body;
                 @endphp

             </p>            <footer class="article-footer">
              <a style="text-decoration: none;"  href="#" class="btn btn-4">
                <i class="fa fa-angle-left"></i> Prev post</a>
              <a style="text-decoration: none;"  href="#" class="btn btn-4">Next post
                <i class="fa fa-angle-right"></i>
              </a>
            </footer>
          </article>
          <!-- Article end -->

          <!-- Comments start -->
          <div class="content-section pb0">
            {{-- comments count --}}

   <h5>{{count($blog->comments)}} Comment(s)</h5>
          @foreach ($blog->comments as $comment)

            <ol class="comment-list">
              <li class="comment">
                <header>
                  <div>
                    <figure>
                      <img  src="{{ asset('assets/images/comment.png') }}"  alt="">
                    </figure>
                    <div class="person">
                      <ul class="meta">
                        <li class="meta-date">Posted on
                        <a style="text-decoration: none;"  href="#">{{$comment->created_at}}</a>
                        </li>
                      </ul>
                      <h5 class="title">{{$comment->name}}</h5>
                    </div>
                  </div>
                  {{-- <a id="reply" href="#" class="color-link">
                    <i class="fa fa-reply"></i> Reply this</a> --}}
                </header>
                <div class="comment-content">
<p>   @php
                      echo  $comment->body;
                    @endphp
</p>

                </div>
              </li>

            </ol>

          @endforeach
        </div>
          <!-- Comments end -->
          <!-- Comment form start -->
          <div class="content-section pb0">
            <h3>add your comment</h3>
            <div class="row d-flex justify-content-center" >
            <form action="{{route('comment.post')}}" method="post" enctype="multipart/form-data" style="border:solid; content-align:center; padding-top:30px; padding-bottom:30px; " class="d-flex align-items-center" >

                @csrf
                @method('POST')

                <div class="form-group clearfix">
                  <div class="col-xs-12 col-sm-6">
                    <input style="border:solid; " name="name" type="text" placeholder="Your name *" class="form-control">
                  </div>
                </div>
            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                <div class="form-group clearfix">
                  <div class="col-xs-12 col-sm-6">
                    <input type="tel"style="border:solid; " name="email" style="border:solid; "  placeholder="Your e-mail *" class="form-control">
                  </div>
                </div>
                <div class="form-group clearfix">
                  <div class="col-xs-12">
                    <textarea id="summary-ckeditor" placeholder="Your message *" name="body" rows="7" class="form-control" style="border:solid; " style="border:solid; " ></textarea>
                  </div>
                </div>
                <div class="form-group clearfix">
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-2">Post your comment</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- Comment form end -->
        </div>
        <div class="col-md-4">
          <!-- Sidebar start -->
          <div class="sidebar">

            <div class="widget widget-recent-posts">
              <h4 class="widget-title">recent posts</h4>
              <div class="widget-content">
                <div class="post preview">
                  <figure class="post-thumbnail">
                    <div class="hover">
                      <a style="text-decoration: none;"  href="images/big-images/4.jpg" class="lightbox-images">
                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                      </a>
                    </div>
                    <img  src="assets/images/big-images/4.jpg" alt="">
                  </figure>
                  <div class="post-content">
                    <p class="post-title">
                      <a style="text-decoration: none;"  href="#">Five great lessons you can learn from Walton Consulting</a>
                    </p>
                  </div>
                </div>
                <div class="post preview">
                  <figure class="post-thumbnail">
                    <div class="hover">
                      <a style="text-decoration: none;"  href="images/big-images/5.jpg" class="lightbox-images">
                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                      </a>
                    </div>
                    <img  src="assets/images/big-images/5.jpg" alt="">
                  </figure>
                  <div class="post-content">
                    <p class="post-title">
                      <a style="text-decoration: none;"  href="#">Why is Walton Consulting the most trending thing now?</a>
                    </p>
                  </div>
                </div>
                <div class="post preview">
                  <figure class="post-thumbnail">
                    <div class="hover">
                      <a style="text-decoration: none;"  href="images/big-images/6.jpg" class="lightbox-images">
                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                      </a>
                    </div>
                    <img  src="assets/images/big-images/6.jpg" alt="">
                  </figure>
                  <div class="post-content">
                    <p class="post-title">
                      <a style="text-decoration: none;"  href="#">How Walton Consulting is going to change your business strategies</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>


            <div class="widget image-bg image-bg-7">
              <h4 class="widget-title">we are hire</h4>
              <div class="widget-content">
                <p>Fusce finibus metus in dolor pharetra, sed efficitur libero pulvinar. Ut ac nunc mi. Donec ut ligula lorem. Phasellus lacinia pulvinar volutpat.</p>
                <p>
                  <a style="text-decoration: none;"  href="#" class="btn btn-1">join our team</a>
                </p>
              </div>
            </div>
          </div>
          <!-- Sidebar end -->
        </div>
      </div>
    </div>


  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
  <script>
  CKEDITOR.replace( 'summary-ckeditor' );
  </script>
  </div>
  <!-- Page content end -->

@endsection
@section('title')
<title>Blog|Lagaster Website Developers</title>
@endsection
@section('metatag')
