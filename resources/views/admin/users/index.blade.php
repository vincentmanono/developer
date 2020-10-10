@extends('layouts.admin')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lagaster Users Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lagaster Users</li>
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
            <h3 class="card-title">Users</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">


    <!-- Main content Ad ministrator-->
    <section class="content">

      <!-- Default box --> <a href="{{route('users.create')}}" class="btn btn-success btn-sm">Create new user</a>
      <div class="card card-solid">

       <LAbel style="padding-left: 42%">     ADMINISTRATORS</LAbel>

        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">

            @foreach ($users as $user)

           {{-- @if ($user->type == 'admin') --}}

           <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
               {{-- {{$user->type}} --}}
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$user->name}}</b></h2>
                    <p class="text-muted text-sm"><b>Role: </b> {{$user->type}} </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>Address:<a href="mailto:{{$user->email}}"> {{$user->email}}</a> </li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Phone #:<a href="tel:{{$user->phone}}">{{$user->phone}}</a>  </li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <img src="/storage/user/{{$user->image}}" alt="" style=" width:90px; height:80%" class="img-circle img-fluid">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-comments"></i>
                  </a>
                  <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> View Profile
                  </a>
                </div>
              </div>
            </div>
          </div>

           {{-- @endif --}}
            @endforeach

          </div>
        </div>

        <!-- /.card-body -->
        <div class="card-footer" style="padding-left:34%">

          {{$users->links()}}
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->


    <br>

    <!-- Main content -->

      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
