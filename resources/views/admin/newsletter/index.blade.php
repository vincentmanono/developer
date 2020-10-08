@extends('layouts.admin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Blogs</li>
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
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@include('messages')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
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
                @foreach ($newsletters as $newsletter)
                <tr>
                    <td>{{$newsletter->id}}</td>
                    <td>{{$newsletter->title}}</td>
                    <td> <a href="{{$newsletter->url}}">{{$newsletter->url}}</a></td>
                    <td> {{$newsletter->cpanelpassword}}</td>
                {{-- <td><a href="{{route('portfolios.show',$newsletter->id)}}" class="btn btn-sm btn-primary">Read more</a></td> --}}
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
