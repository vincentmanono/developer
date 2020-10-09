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
                <label data-filter="*" style="margin-left: 50%">show all</label>

              </div>
            </div>
          </div>
          <!-- Portfolio filter end -->
          <div class="row">
            <div class="grid">
              @foreach ($portfolios as $portfolio)

              <div class="col-xs-12 col-sm-6 col-md-4 grid-item automotive">
                <div class="recent-cases-item v2 mtl portfolio">
                  <figure>

                   <a  href="{{$portfolio->url}}"> <img src="/storage/portfolio/{{$portfolio->image}}"   alt="lagaster" ></a>
                  </figure>
                  <div class="details">
                    <p class="title">
                      <a style="text-decoration: none;"   href="{{$portfolio->url}}">{{$portfolio->title}}</a>
                    </p>
                <p class="text-decor-1"><a href="{{$portfolio->url}}" style="text-decoration: none">Visit</a></p>
                  </div>
                </div>
              </div>



              @endforeach


            </div>

          </div>
          <div style="margin-left: 30%">

            {{$portfolios->links()}}
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
