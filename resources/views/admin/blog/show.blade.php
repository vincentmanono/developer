@extends('layouts.admin')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Single blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="../../dist/img/prod-1.jpg" class="product-image" alt="Product Image">
              </div>

            </div>

            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$blog->title}}</h3>
            <p>{{$blog->subtitle}}</p>
              <hr>
              <h4>{{$blog->body}}</h4>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link btn-primary" id="product-desc-tab" href="#" aria-selected="true" role="tab" aria-selected="false">Edit Blog</a>
                <a class="nav-item nav-link btn-danger" id="product-comments-tab"  href="#"  role="tab" aria-selected="false">Delete blog</a>
                <a class="nav-item nav-link btn-success" id="product-rating-tab"  href="{{route('blog.index')}}" role="tab" aria-selected="false">Back</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              {{--  --}}
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
