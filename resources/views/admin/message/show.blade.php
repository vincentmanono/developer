@extends('layouts.admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Client Contact  </h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Message</li>
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
          <h3 class="card-title">Contact Page Message</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          {{-- Start creating your amazing application! --}}



<div class="container">
<div class="row">

    <div class="col-md-4">

        <div >
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
               {{-- {{$message->type}} --}}
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$message->name}}</b></h2>
                    <p class="text-muted text-sm"><b>Subject: </b> {{$message->subject}} </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>Address:<a href="mailto:{{$message->email}}"> {{$message->email}}</a> </li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Phone #:<a href="tel:{{$message->phone}}">{{$message->phone}}</a>  </li>
                    </ul>
                  </div>
                  {{-- <div class="col-5 text-center">
                    <img src="/storage/user/{{$message->image}}" alt="" style=" width:90px; height:80%" class="img-circle img-fluid">
                  </div> --}}
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                    <div style="float: left">

                <a href="{{route('contact.index')}}" class="btn btn-sm btn-warning">Back</a>
                </div>

                    <a href="#" class="btn btn-sm bg-teal">
                        <i class="fas fa-comments"></i>
                      </a>

                  {{-- <a href="{{route('users.show',$message->id)}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Delete Message
                  </a> --}}
                <div style="float: right; margin-left:2%">
                <form action="{{route('contact.del',$message->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-primary ">Delete</button>
                    </form>
                </div>
                </div>
              </div>
            </div>
          </div>


    </div>
    <div class="col-md-8">

        <div class="jumbotron">
            <h1 class="display-4"></h1>
            <p class="lead">{{$message->subject}}</p>
            <hr class="my-4">
            <p>{{$message->message}}</p>
        </div>

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
