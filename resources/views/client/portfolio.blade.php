@extends('layouts.mainapp')
@section('title')
    Portfolio | Lagaster Portfolio| Best Website Development in Kenya| Website developers in East Africa
@endsection
@section('content')


<!-- Start Banner -->
<div class="section inner_page_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_title">
                    <h3><span class="theme_color">Portfolio</span> </h3>
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
                       <h2><span class="theme_color">Our</span> Portfolio</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($portfolios as $portfolio)

           <a href="{{ $portfolio->url }}">
            <div class="col-md-4 col-sm-6 col-xs-12" >
                <div >
                  <div>

                      <img height="140%" width="90%" src="{{'/storage/portfolio'. '/'.$portfolio->image}}" alt="{{ $portfolio->title}}">
                      <h4>{{ $portfolio->title }}</h4> <br>
                      <h6>
                        {{ $portfolio->description }}
                      </h6>
                  </div>
                </div>
           </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end section -->

@endsection
