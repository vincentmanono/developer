@extends('layouts.admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Client Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Client Detail</li>
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
          {{-- <h3 class="card-title">Projects Detail</h3> --}}
        <a href="{{route('clients.index')}}" class="btn btn-warning">Back</a>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-9 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Name</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$client->name}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Phone</span>
                      <a href="tel:{{$client->phone}}" class="info-box-number text-center text-muted mb-0">{{$client->phone}}</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Email</span>
                      <a href="mailto:{{$client->email}}" class="info-box-number text-center text-muted mb-0">{{$client->email}} <a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                <h4>{{$client->name}}  Projects</h4>
<br><br>
                  <div class="row">
                    @foreach ($client->portfolios as $portfolio)
                      <div class="col-md-4">
                        <div class="post">
                            <span class="username">
                                <label> Project Title: {{$portfolio->title}}</label>
                              </span>
                            <img width="100%" height="30%" src="../../dist/img/user1-128x128.jpg" alt="user image">

                            <div class="user-block">

                              <span class="description">Created on  {{$portfolio->created_at}}</span>
                            </div>
                            <span class="username">
                                <label >CPanel Password: </label>
                                <h5> {{$portfolio->cpanelpassword}}</h5>
                              </span>
                            <!-- /.user-block -->
                            <span class="username">
                                <label> DESCRIPTION:</label>
                              </span>
                            <p>{{$portfolio->description}}
                            </p>
<span class="username"><p><label for="">URL:</label>
                              <a href="{{$portfolio->url}}" class="link-black text-sm"><i class="fas fa-link mr-1"></i>{{$portfolio->url}}</a>
                            </p>
                          </div></span>

                          <hr>
                      </div>


                      @endforeach
                  </div>


                    {{-- <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                      </p>
                    </div> --}}
{{--
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                        </span>
                        <span class="description">Shared publicly - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
                      </p>
                    </div> --}}
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-3 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Action</h3>
              {{-- <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p> --}}
              <br>
              {{-- <div class="text-muted">
                <p class="text-sm">Client Company
                  <b class="d-block">Deveint Inc</b>
                </p>
                <p class="text-sm">Project Leader
                  <b class="d-block">Tony Chicken</b>
                </p>
              </div> --}}

              {{-- <h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul> --}}

               <div>
                <a href="{{route('clients.edit',$client->id)}}" class="btn  btn-primary">Edit</a>
               </div>
                <br>
               <div>
               <form action="{{route('clients.destroy',$client->id)}}" method="POST">
                @csrf
                @method('DELETE')
                    <button href="#" class="btn  btn-danger">Delete</button>
               </form>

               </div>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection
