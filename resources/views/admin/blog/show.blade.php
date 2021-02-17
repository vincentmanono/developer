@extends('layouts.admin')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">


            <h1>
                Single blog




            </h1>
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
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">

    <a class="btn btn-primary " href="{{route('blog.edit',$blog->slug)}}" type="submit"> Edit Blog</a>
<div style="float:right;">
    <a class="btn btn-success " style="margin-left: 5%" href="{{route('blog.edit',$blog->slug)}}" type="submit"> Back</a>

</div>

<div style="float: right">



<form action="{{ route('blog.destroy', $blog->slug) }}" method="post">
    @method("DELETE")
    @csrf
    <div class="modal-footer">
        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm" style="float:right">Delete</button>
    </div>
</form>


</div>

        </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">







    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              {{-- <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3> --}}
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
<br>
<hr>
<h3 class="my-3">Blog Comments</h3>
<div class="row">
   @foreach ($blog->comments as $comment)
   <div class="col-lg-12">
   <h3 >{{$comment->name}}</h3>
   <br>

   <h5>{{$comment->email}}

    <div style="float: right;">
        <h6> created on:{{$comment->created_at}}</h6>
        </div>
    </h5>

   <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

   <p>
   <form action="{{route('comment.del',$comment->id)}}" enctype="multipart/form-data" method="post">
    @csrf
        @method('DELETE')

      <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger">Delete</button>

    </form>
   </p>

   {{-- <p><a class="btn btn-sm btn-danger" href="{{route('comment.del',$comment->id)}}" role="button">Delete </a></p> --}}
 </div>
   @endforeach
  </div><!-- /.row -->
            </div>

          </div>
          <div class="row">
            <nav class>
              <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link" id="product-desc-tab" href="{{route('blog.edit',$blog->slug)}}" aria-selected="true" role="tab" aria-selected="false">
</a>
<a class="nav-item nav-link" id="product-desc-tab" aria-selected="true" role="tab" aria-selected="false">

</a>
                <a class="nav-item nav-link" id="product-desc-tab" href="{{route('blog.index')}}" aria-selected="true" role="tab" aria-selected="false">
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

</div>
<!-- /.card-body -->
<div class="card-footer">
  Footer
</div>
<!-- /.card-footer-->
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->












@endsection
