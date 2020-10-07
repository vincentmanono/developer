@extends('layouts.admin')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div>
            @if ($param == 'create')
            <h1>Project Edit</h1>
            @elseif($param == 'edit')
            <h1>Project Edit</h1>
            @endif
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              @if ($param == 'create')
              <li class="breadcrumb-item active">Project Edit</li>
              @elseif($param == 'edit')
              <li class="breadcrumb-item active">Project Edit</li>
              @endif
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" style="padding-left: 10%;padding-right: 10%;">
        <div class="col-md-12" >
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>

            <div class="card-body">
      @if ($param == 'create')
      <form action="{{route('users.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label for="inputName">Name</label>
      <input type="name" id="inputName" class="form-control" required placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="inputName">Phone</label>
        <input type="phone" id="inputName" class="form-control"  required placeholder="Enter Phone Number">
      </div>
      <div class="form-group">
        <label for="inputName">Email</label>

      <input type="email" id="inputName" class="form-control" required placeholder="email">
      </div>
      <div class="form-group">
        <label for="inputName">Image</label>
        <input type="file" id=""  value="">
      </div>
      <div class="form-group">
        <label for="inputName">Type</label>
        <input type="type" id="inputName" class="form-control" required placeholder="admin/user/super">
      </div>
      <div class="form-group">
        <label for="inputName">Password</label>
        <input id="password" type="password" id="inputName" class="form-control" required >
      </div>
      <div class="form-group">
        <label for="inputName">Confirm Password</label>
        <input  id="password-confirm" type="password" name="password_confirmation" id="inputName" class="form-control" required >
      </div>

      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
    </form>

      @elseif($param == 'edit')

      <form action="{{route('users.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label for="inputName">Name</label>
      <input type="name" id="inputName" class="form-control" value="{{$user->name}}" required placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="inputName">Phone</label>
        <input type="phone" id="inputName" class="form-control" value="{{$user->phone}}" required placeholder="Enter Phone Number">
      </div>
      <div class="form-group">
        <label for="inputName">Email</label>

      <input type="email" id="inputName" class="form-control" value="{{$user->email}}" required placeholder="email">
      </div>
      <div class="form-group">
        <label for="inputName">Image</label>
        <input type="file" id=""  value="">
      </div>
      <div class="form-group">
        <label for="inputName">Type</label>
        <input type="type" id="inputName" class="form-control" value="{{$user->type}}" required placeholder="admin/user/super">
      </div>

      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
    </form>

      @endif
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
