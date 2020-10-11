@extends('layouts.admin')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('messages')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            @if ($param == 'create')

            <h1> Client Adding Platform</h1>

            @else

            <h1>Edit Client Details Platform</h1>

            @endif
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              @if ($param == 'create')
              <li class="breadcrumb-item active">Add new client</li>

              @else
              <li class="breadcrumb-item active">Edit Client Details</li>

              @endif
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- right column -->
         @if ($param == 'create')
         <!-- left column -->
         <div class="col-md-6" style="margin-left: 10%">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form role="form" action="{{route('clients.store')}}" method="POST">
                @csrf
                @method('POST')

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Client Name</label>
                    <input type="text" class="form-control" name="name" required id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Client Phone number</label>
                    <input type="text" class="form-control" name="phone" required id="exampleInputEmail1" placeholder="Enter Phone Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Client Email Address</label>
                    <input type="email" class="form-control" name="email" required id="exampleInputEmail1" placeholder="Enter Email Address">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



          </div>
          <!--/.col (left) -->

         @else
         <div class="col-md-6" style="margin-left: 10%">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit client details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" action="{{route('clients.update',$clientedit->id)}}" method="POST">
                @csrf
                @method('PUT')
                  <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">

                    </div>
                  </div>
                  <div class="row">

                  </div>

                  <!-- input states -->
                  <div class="form-group">Client Name</label>
                    <input type="text" name="name" class="form-control is-valid" id="inputSuccess" value="{{$clientedit->name}}" >
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i ></i>Client Phone</label>
                  <input type="text" name="phone" class="form-control is-warning" value="{{$clientedit->phone}}" id="inputWarning" >
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i ></i> Client Email</label>
                  <input type="email" name="email" class="form-control is-valid" id="inputError" value="{{$clientedit->email}}" >
                  </div>


                  <div >
                    <button type="submit" style="margin-left: 40%" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

          </div>

         @endif
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
