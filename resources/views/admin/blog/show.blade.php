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
@include('messages')
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
              <img src="/storage/blog/{{$blog->image}}" class="product-image" alt="Blog Image">
              </div>

            </div>

            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$blog->title}}</h3>
            <p>{{$blog->subtitle}}</p>
              <hr>
              <h4></h4>
@php
   echo $blog->body;
@endphp
            </div>
          </div>
          <div class="row">
            <nav class=>
              <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link" id="product-desc-tab" href="{{route('blog.edit',$blog->slug)}}" aria-selected="true" role="tab" aria-selected="false">
<button class="btn btn-primary " href="{{route('blog.edit',$blog->slug)}}" type="submit"> Edit Blog</button></a>
<a class="nav-item nav-link" id="product-desc-tab" aria-selected="true" role="tab" aria-selected="false">

<form action="{{ route('blog.destroy', $blog->slug) }}" method="post">
                    @method("DELETE")
                    @csrf
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
</a>
                <a class="nav-item nav-link" id="product-desc-tab" href="{{route('blog.index')}}" aria-selected="true" role="tab" aria-selected="false">
                    <button class="btn btn-success " href="{{route('blog.edit',$blog->slug)}}" type="submit"> Back</button></a>
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
