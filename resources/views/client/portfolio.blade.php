@extends('layouts.mainapp')
@section('content')

<div style="background-image: url('assets/images/big-images/4.jpg')">

    <div class="content-section  page-titlebar">
      <div class="container">


        <div class="row">
          <div class="col-lg-12">
            <h1 style="color: white">Portfolio</h1>
            <ol class="breadcrumb">
              <li>
                <a style="text-decoration: none;"  href="/">Home</a>
              </li>
              <li>
                <a style="text-decoration: none;"  href="/portfolio">Portfolio</a>
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
          <!-- Portfolio filter start -->
          <div class="row">
            <div class="col-lg-12">
              <div class="button-group filter-button-group">
                <button data-filter="*">show all</button>
                <button data-filter=".automotive">automotive</button>
                <button data-filter=".chemicals">chemicals</button>
                <button data-filter=".energy">energy</button>
                <button data-filter=".healthcare">healthcare</button>
                <button data-filter=".manufacturing">manufacturing</button>
                <button data-filter=".telecom">telecommunications</button>
              </div>
            </div>
          </div>
          <!-- Portfolio filter end -->
          <div class="row">
            <div class="grid">
              <div class="col-xs-12 col-sm-6 col-md-4 grid-item automotive">
                <div class="recent-cases-item v2 mtl portfolio">
                  <figure>

                    <img src="assets/images/big-images/1.jpg" alt="">
                  </figure>
                  <div class="details">
                    <p class="title">
                      <a style="text-decoration: none;"  href="#">Jeans Unlilmited</a>
                    </p>
                    <p class="text-decor-1">Windsor, OH 44099</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4 grid-item chemicals">
                <div class="recent-cases-item v2 mtl portfolio">
                  <figure>

                    <img src="assets/images/big-images/2.jpg" alt="">
                  </figure>
                  <div class="details">
                    <p class="title">
                      <a style="text-decoration: none;"  href="#">Best Products</a>
                    </p>
                    <p class="text-decor-1">Vienna, VA 22181 </p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4 grid-item energy">
                <div class="recent-cases-item v2 mtl portfolio">
                  <figure>

                    <img src="assets/images/big-images/3.jpg" alt="">
                  </figure>
                  <div class="details">
                    <p class="title">
                      <a style="text-decoration: none;"  href="#">Blockbuster Music</a>
                    </p>
                    <p class="text-decor-1">Phoenix, AZ 85012</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4 grid-item healthcare">
                <div class="recent-cases-item v2 mtl portfolio">
                  <figure>

                    <img src="assets/images/big-images/4.jpg" alt="">
                  </figure>
                  <div class="details">
                    <p class="title">
                      <a style="text-decoration: none;"  href="#">H. J. Wilson & Company</a>
                    </p>
                    <p class="text-decor-1">Thousand Oaks, CA 91362</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4 grid-item manufacturing">
                <div class="recent-cases-item v2 mtl portfolio">
                  <figure>

                    <img src="assets/images/big-images/5.jpg" alt="">
                  </figure>
                  <div class="details">
                    <p class="title">
                      <a style="text-decoration: none;"  href="#">Fedco</a>
                    </p>
                    <p class="text-decor-1">Chicago, IL 60639</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4 grid-item telecom">
                <div class="recent-cases-item v2 mtl portfolio">
                  <figure>

                    <img src="assets/images/big-images/6.jpg" alt="">
                  </figure>
                  <div class="details">
                    <p class="title">
                      <a style="text-decoration: none;"  href="#">Crazy Eddie</a>
                    </p>
                    <p class="text-decor-1">New York, NY 10013</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">

            </div>
          </div>
        </div>
      </div>
      <!-- Page content end -->
      <!-- CTA start -->
      <div class="content-section image-bg image-bg-8 cta v3">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 cta-v3-content">
              <div class="content">
                <p class="text-1">our mission is to</p>
                <p class="text-2">boost your revenue & profit</p>
                <p>We help our clients grow their revenue & profits. Faster, better and sustainably than anyone else.</p>
              </div>
              <p class="right">
                <a style="text-decoration: none;"  href="#" class="btn btn-1">
                  <i class="fa fa-file"></i> get a quotation</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- CTA end -->
    </div>

@endsection
