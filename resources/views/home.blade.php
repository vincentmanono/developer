@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{auth()->user()->name}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>50</h3>

                <p>Projects</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Email</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$countclient}}</h3>

                <p>Clients</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$countusers}}</h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-md-8">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Users</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">{{$countusers}}</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                     @foreach ($users as $user)

                     <li>
                        <img src="dist/img/user1-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#"><h6>{{$user->name}}</h6></a>
                        <span class="users-list-date"><h6>{{$user->type}}</h6></span>
                      </li>

                     @endforeach

                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="{{route('users.index')}}">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
          <!-- right col -->
             <!-- /.col -->

             <div class="col-md-4">

                <!-- PRODUCT LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Newsletter Emails</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                      <li class="item">

                      </li>
                      <!-- /.item -->
                     @foreach ($newsletters as $newsletter)

                     <li class="item">
                        <div class="product-img">
                            Date {{$newsletter->created_at}}
                        </div>
                        <div class="product-info">
                          <a href="javascript:void(0)" class="product-title"> mail
                          <span class="badge badge-info float-right"></span></a>
                          <span class="product-description">
                           <a href="">{{$newsletter->email}}</a>
                          </span>
                        </div>
                      </li>


                     @endforeach
                    </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
        <!-- Main row -->
        <div class="row col-md-12">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Projects</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>Project ID</th>
                        <th>Name</th>
                        <th>Created date</th>
                        <th>CPanel password</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($portfolios as $portfolio)
                      <tr>

                      <td><a href="pages/examples/invoice.html">{{$portfolio->id}}</a></td>
                        <td>{{$portfolio->title}}</td>
                        <td><span class="badge badge-primary">{{$portfolio->created_at}}</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">{{$portfolio->cpanelpassword}}</div>
                        </td>
                      </tr>

                      @endforeach

                      </tbody>
                      <tfoot>
                        <th>Project ID</th>
                        <th>Name</th>
                        <th>Information</th>
                        <th>CPanel password</th>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="{{route('portfolios.create')}}" class="btn btn-sm btn-info float-left">Add new Project</a>
                  <a href="{{route('portfolios.index')}}" class="btn btn-sm btn-secondary float-right">View All Projects</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>

          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
