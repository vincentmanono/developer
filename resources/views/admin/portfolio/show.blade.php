@extends('layouts.admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">   Portfolio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Title</h3> --}}
        <a class="btn btn-primary  " href="{{route('portfolios.index')}}">back</a>


          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          {{-- Start creating your amazing application! --}}
          <!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{$portfolio->title}}
      <small></small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="/storage/portfolio/{{$portfolio->image}}" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Project Description</h3>
      <p>{{$portfolio->description}}</p>
        <h3 class="my-3">Project Details</h3>
        <ul>
        <label style="block-size: 0%">Cpanel Password</label>
          <li> {{$portfolio->cpanelpassword}}</li>
          <label>Url</label>
          <li> <a href="{{$portfolio->url}}">{{$portfolio->url}}</a></li>
        </ul>



  <div >
    <a class="btn btn-success  "  href="{{route('portfolios.edit',$portfolio->id)}}" style="float: right">edit</a>
    <form action="{{route('portfolios.destroy',$portfolio->id)}}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger" style="float: right; margin-right:2%;">Delete</button>

    </form>
  </div>

      </div>



    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    {{-- <h3 class="my-4">Related Projects</h3>
    @php
        $customer = {{$client->name}}
            @endphp
if() --}}
    {{-- <div class="row">

     @foreach ($portfolios as $portfolio)
if($client)
     <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
      </div>

     @endforeach

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
      </div>

    </div>
    <!-- /.row --> --}}

  </div>
  <!-- /.container -->

          <div class="container">
              <div class="row">
                  <div class="col-md-9">

                  </div>
                  <div class="col-md-3">

                  </div>
              </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
