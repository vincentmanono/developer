@extends('layouts.admin')
@section('content')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="/storage/user/{{$user->image}}" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{$user->name}}</h3>

                                    <p class="text-muted text-center">{{$user->type}}</p>

                                     <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Phone</b> <a class="float-right">{{$user->phone}}</a>
                                        </li>
                                        <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{$user->email}}</a>
                                        </li>
                                        <li class="list-group-item">
                                            {{-- <b>Friends</b> <a class="float-right">13,287</a> --}}
                                        </li>
                                    </ul>
                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-success btn-block"><b>Edit Profile</b></a>
                                <br>
                                <form action="{{route('users.destroy',$user->id)}}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('DELETE')
                                @if(Auth::user()->type == 'admin')

                                <button type="submit" class="btn btn-sm btn-danger">Delete User</button>
                                @elseif(Auth::user()->type == 'user')
<div style="padding-left:30%" >
                                    <button type="submit" class="btn btn-lg btn-danger btn-block" disabled>Delete User</button>

</div>
                                @endif
                            </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                        </div>
                        <!-- /.col -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Blogs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Projects</a></li>
                                        {{-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> --}}
                                    </ul>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <!-- Post -->
                                            <div class="post">
                                                <div class="user-block">

                                                </div>
                                                <div>

                                                </div>
                                                <!-- /.user-block -->
                                                <div class="row mb-3">

                                                        @foreach ($user->blogs as $blog) <div class="col-sm-6">
                                                        <img class="img-fluid" src="/storage/blog/{{$blog->image}}" alt="Blog ttPhoto">
                                                        <span class="username">
                                                          <a href="#"><label for="">{{$blog->title}}</label></a>
                                                            {{-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> --}}
                                                          </span>
                                                        <br>   <span class="description">Created at  {{$blog->created_at}}</span><br>
                                                        <a href="{{route('blog.show',$blog->slug)}}" class="btn btn-warning btn-sm">Read more</a>
                                                                                </div> @endforeach

                                                    {{-- <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                                                <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-6">
                                                                <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                                                <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->
                                                    </div>
                                                    <!-- /.col --> --}}
                                                </div>
                                                <!-- /.row -->



                                                {{-- <input class="form-control form-control-sm" type="text" placeholder="Type a comment"> --}}
                                            </div>
                                            <!-- /.post -->
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="timeline">
                                            <!-- The timeline -->

                                            @foreach ($user->portfolios as $portfolio) <div class="col-sm-6">
                                                <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                                <span class="username">
                                                  <a href="#"><label for="">{{$portfolio->title}}</label></a>
                                                    {{-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> --}}
                                                  </span>
                                                <br>   <span class="description">Created at  {{$portfolio->created_at}}</span><br>
                                                <a href="{{route('portfolios.show',$portfolio->id)}}" class="btn btn-warning btn-sm">Read more</a>
                                                                        </div> @endforeach

                                                <!-- END timeline item -->

                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.nav-tabs-custom -->
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
