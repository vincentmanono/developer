@extends('layouts.mainapp')
@section('content')

<div style="background-image: url('assets/images/big-images/4.jpg')">

    <div class="content-section  page-titlebar">
      <div class="container">


        <div class="row">
          <div class="col-lg-12">
            <h1 style="color: white">blog </h1>
            <ol class="breadcrumb">
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/blogmore">blog</a>
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
              <img  src="assets/images/big-images/1.jpg" alt="">
            </figure>
            <header class="article-header">
              <ul class="meta">
                <li class="meta-date">Posted on
                  <a href="#">2th May, 2018</a>
                </li>
                <li class="meta-category">in
                  <a href="#">News & Events</a>
                </li>
              </ul>

              <h2 class="title">How Walton Consulting is going to change your business strategies</h2>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis tellus a nunc lobortis facilisis. Cras ante mauris, aliquam quis mattis in, efficitur vel nisi. Pellentesque vel eros lorem. Praesent ultrices mi sed nunc
              hendrerit aliquam. Proin tristique lectus eu neque rhoncus, eu euismod dolor malesuada. Etiam aliquet eros sollicitudin pharetra efficitur. Pellentesque ligula lectus, molestie sed iaculis et, sollicitudin ac turpis. Suspendisse
              vel arcu porta, varius ligula eget, posuere diam. Praesent turpis justo, facilisis vitae diam sit amet, placerat rhoncus neque. Sed rhoncus ac libero eu blandit. </p>
            <blockquote>
              <p>" Do the difficult things while they are easy and do the great things while they are small. A jorney of a thousand miles begin with a single step. "</p>
              <footer>Lao Tzu</footer>
            </blockquote>
            <p>Sed porta tincidunt turpis, sed auctor ex vehicula a. Proin cursus, odio ut laoreet fringilla, urna sem mattis turpis, ut sagittis lectus enim vel augue. Curabitur commodo hendrerit justo, sit amet commodo felis. Aenean ac tempus risus.
              Proin et ex efficitur, euismod justo id, semper arcu. Vestibulum ut magna ac nisl molestie tincidunt non et arcu. Morbi hendrerit augue euismod lacus efficitur, sit amet lobortis lectus rhoncus. Sed faucibus urna id faucibus tristique.
              Aenean rutrum quam eu orci varius, ac blandit nibh posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ornare ipsum eget tortor pharetra venenatis. Pellentesque vestibulum
              turpis sit amet neque tristique, vitae tempus nisl pharetra. Sed ut diam vitae ligula pretium pellentesque at ut augue. Nunc at libero quis sem ornare consequat. </p>
            <figure class="preview fl-r">
              <a href="images/big-images/2.jpg" class="lightbox-images">
                <img  src="assets/images/big-images/2.jpg" alt="">
              </a>
              <figcaption>
                <strong>Figure #2:</strong> We focus on passion and leadership.</figcaption>
            </figure>
            <p>Nulla nisl odio, ullamcorper eu placerat nec, bibendum id risus. Nulla vitae dui lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim lorem quam, et condimentum purus tincidunt eget. Nam commodo purus non
              turpis vestibulum accumsan. In ac rhoncus lectus, vel imperdiet orci. Sed consectetur lectus convallis purus dictum, eu egestas velit fermentum. Cras varius vehicula quam a malesuada.</p>
            <p>Aliquam erat volutpat. Maecenas eu interdum justo. Cras sagittis, est et malesuada tristique, erat magna eleifend lacus, eget viverra justo mi ac arcu. Integer sit amet nisi eleifend, pretium tortor non, mollis felis. Aenean ullamcorper
              neque eget imperdiet egestas. Donec et diam faucibus, imperdiet dolor at, tincidunt enim. Aenean fringilla odio ut congue sagittis. Donec eu nisl nec erat ullamcorper vulputate a sed diam. Maecenas vehicula commodo urna tempus gravida.
              Vivamus lacinia dictum elit, at luctus sem consequat interdum. Mauris sagittis euismod lacus sed aliquam. Phasellus est sapien, ultricies non bibendum et, pellentesque non est. Donec mauris ante, iaculis et accumsan eget, pulvinar
              vel nibh. </p>
            <h3>The best advice you coud ever get about consulting services</h3>
            <p>Etiam convallis tortor ut urna luctus maximus. Sed vestibulum consequat massa, a ultrices libero molestie vel. Sed lacinia dolor laoreet lorem venenatis, a fringilla lacus sagittis. Sed commodo volutpat erat cursus blandit. Suspendisse
              non nibh nec risus tempor fringilla. Morbi lacinia scelerisque faucibus. Mauris commodo ligula justo, vitae malesuada tortor vestibulum sed. Nunc malesuada ullamcorper enim, sed volutpat eros molestie non. Aliquam imperdiet, lorem
              vel lacinia pretium, turpis sem viverra odio, id sollicitudin risus nibh id nisl. Fusce dignissim aliquet fringilla. Nunc id urna id metus pellentesque dictum eget pellentesque ipsum. Vestibulum in urna eu urna consectetur mattis.
              </p>
            <footer class="article-footer">
              <a href="#" class="btn btn-4">
                <i class="fa fa-angle-left"></i> Prev post</a>
              <a href="#" class="btn btn-4">Next post
                <i class="fa fa-angle-right"></i>
              </a>
            </footer>
          </article>
          <!-- Article end -->

          <!-- Comments start -->
          <div class="content-section pb0">
            <h3>comments (3)</h3>
            <ol class="comment-list">
              <li class="comment">
                <header>
                  <div>
                    <figure>
                      <img  src="assets/images/faces/10.jpg" alt="">
                    </figure>
                    <div class="person">
                      <ul class="meta">
                        <li class="meta-date">Posted on
                        <a href="#">{{$blog->created_at}}</a>
                        </li>
                      </ul>
                      <h5 class="title">Clara F. Kramer</h5>
                    </div>
                  </div>
                  {{-- <a id="reply" href="#" class="color-link">
                    <i class="fa fa-reply"></i> Reply this</a> --}}
                </header>
                <div class="comment-content">
                  <p>Walton has really helped our business. Wow what great service, I love it!</p>
                </div>
              </li>

            </ol>
          </div>
          <!-- Comments end -->
          <!-- Comment form start -->
          <div class="content-section pb0">
            <h3>add your comment</h3>
            <div class="row d-flex justify-content-center" >
              <form style="border:solid; content-align:center; padding-top:30px; padding-bottom:30px; " class="d-flex align-items-center" >
                <div class="form-group clearfix">
                  <div class="col-xs-12 col-sm-6">
                    <input style="border:solid; " type="text" placeholder="Your name *" class="form-control">
                  </div>
                </div>
                <div class="form-group clearfix">
                  <div class="col-xs-12 col-sm-6">
                    <input type="tel"style="border:solid; " style="border:solid; "  placeholder="Your e-mail *" class="form-control">
                  </div>
                </div>
                <div class="form-group clearfix">
                  <div class="col-xs-12 col-sm-6">
                    <input type="url" style="border:solid; " style="border:solid; " placeholder="Website..." class="form-control">
                  </div>
                </div>
                <div class="form-group clearfix">
                  <div class="col-xs-12">
                    <textarea placeholder="Your message *" rows="7" class="form-control" style="border:solid; " style="border:solid; " ></textarea>
                  </div>
                </div>
                <div class="form-group clearfix">
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-2">Send your comment</button>
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
                      <a href="images/big-images/4.jpg" class="lightbox-images">
                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                      </a>
                    </div>
                    <img  src="assets/images/big-images/4.jpg" alt="">
                  </figure>
                  <div class="post-content">
                    <p class="post-title">
                      <a href="#">Five great lessons you can learn from Walton Consulting</a>
                    </p>
                  </div>
                </div>
                <div class="post preview">
                  <figure class="post-thumbnail">
                    <div class="hover">
                      <a href="images/big-images/5.jpg" class="lightbox-images">
                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                      </a>
                    </div>
                    <img  src="assets/images/big-images/5.jpg" alt="">
                  </figure>
                  <div class="post-content">
                    <p class="post-title">
                      <a href="#">Why is Walton Consulting the most trending thing now?</a>
                    </p>
                  </div>
                </div>
                <div class="post preview">
                  <figure class="post-thumbnail">
                    <div class="hover">
                      <a href="images/big-images/6.jpg" class="lightbox-images">
                        <span class="wicon-iconmonstr-zoom-in-thin"></span>
                      </a>
                    </div>
                    <img  src="assets/images/big-images/6.jpg" alt="">
                  </figure>
                  <div class="post-content">
                    <p class="post-title">
                      <a href="#">How Walton Consulting is going to change your business strategies</a>
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
                  <a href="#" class="btn btn-1">join our team</a>
                </p>
              </div>
            </div>
          </div>
          <!-- Sidebar end -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page content end -->

@endsection
