@extends('layouts.admin')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @if ($param == 'create')
            <h1>New Blog</h1>
            @else
            <h1>Edit Blog</h1>
            @endif
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" ><a href="{{route('blog.index')}}">Back to blogs</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid " style="margin-left: 10%">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Blog</h3>
              </div>
              <!-- /.card-header -->
              @include('messages')
              <!-- form start -->
 @if ($param == 'create')
 <form role="form" enctype="multipart/form-data" action="{{route('blog.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Blog Titile</label>
      <input type="text" class="form-control" required id="exampleInputEmail1"  name="title" placeholder="Enter blog title">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Blog Subtitle</label>
        <input type="text" class="form-control" required id="exampleInputPassword1" name="subtitle" placeholder="Enter blog subtittle">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Blog Image</label>
        <div class="input-group">
            <input type="file" name="image" required id="">
          </div>

        </div>
      </div>

    <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Blog Content</label>
          <textarea type="textarea" class="form-control"required id="summary-ckeditor" name="body" placeholder=""></textarea>
        </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
</div>


@else
<form role="form" enctype="multipart/form-data" action="{{route('blog.update',$editblog->slug)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Blog Titile</label>
        <input type="text" class="form-control" required id="exampleInputEmail1" value="{{$editblog->title}}" name="title" placeholder="Enter blog title">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Blog Subtitle</label>
        <input type="text" class="form-control" required id="exampleInputPassword1" value="{{$editblog->subtitle}}"  name="subtitle" placeholder="Enter blog subtittle">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Blog Image</label>
        <div class="input-group">
        <input type="file" name="image" value="{{old('image')}}" required id="">
          </div>

        </div>
      </div>

    <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Blog Content</label>
          <textarea type="textarea" class="form-control"required id="summary-ckeditor" name="body" placeholder="">@php
              echo $editblog->body
          @endphp </textarea>
        </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
</div>

@endif
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
