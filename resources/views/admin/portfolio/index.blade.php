@extends('layouts.admin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lagaster Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">portfolio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              <a href="{{route('portfolios.create')}}" class="btn btn-warning">Create a new project</a>
              </div>
              <!-- /.card-header -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@include('messages')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>URL</th>
                    <th>CpanelPassword</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach ($portfolios as $portfolio)
                <tr>
                    <td>{{$portfolio->id}}</td>
                    <td>{{$portfolio->title}}</td>
                    <td> <a href="{{$portfolio->url}}">{{$portfolio->url}}</a></td>
                    <td> {{$portfolio->cpanelpassword}}</td>
                <td><a href="{{route('portfolios.show',$portfolio->id)}}" class="btn btn-sm btn-primary">Read more</a></td>
                  </tr>

                @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>URL</th>
                    <th>CpanelPassword</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
