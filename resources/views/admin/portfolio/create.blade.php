@extends('layouts.admin')
@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Portfolio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Portfolio edit</li>
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
        <h3 class="card-title">Portfolio</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

            @if ($param == 'create')

            <div class="col-md-9" style="margin-left: 10%">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Create Portfolio</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                <form role="form" method="POST" enctype="multipart/form-data" action="{{route('portfolios.store')}}">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Url</label>
                        <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter Url">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="textarea"  rows="6" cols="300" name="description" class="form-control" id="exampleInputEmail1" placeholder="Description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">CPanelPassword</label>
                        <input name="cpanelpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                          <div class="custom-file"><div class="form-group">

                              <input id="my-input" class="form-control-file" type="file" name="image">
                          </div>
                         </div>
                          {{-- <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div> --}}
                        </div>
                      </div>
                      <label for="cars">Choose Client:</label>
                      <select name="client_id" >
                      @foreach ($clients as $client)

                      <option value="{{$client->id}}" >{{$client->name}}</option>

                      @endforeach

                      </select>
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

            @elseif($param == 'edit')

              <!-- right column -->
          <div class="col-md-9" style="margin-left: 10%">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Portfolio</h3>
              </div>
                <!-- form start -->

                <form role="form" method="POST" enctype="multipart/form-data" action="{{route('portfolios.update',$portfolioedit->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                      <input type="text" value="{{$portfolioedit->title}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Url</label>
                        <input type="text" value="{{$portfolioedit->url}}" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="textarea" rows="6" cols="300" value="" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter email">{{$portfolioedit->description}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">CPanelPassword</label>
                      <input name="cpanelpassword" value="{{$portfolioedit->cpanelpassword}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                          <div class="custom-file"><div class="form-group">

                          <input id="my-input" value="{{old('image')}}" class="form-control-file" type="file" name="image">
                          </div>
                         </div>
                          {{-- <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div> --}}
                        </div>
                      </div>
                      <label for="cars">Choose Client:</label>
                      <select name="client_id" >
                      @foreach ($clients as $client)

                      <option value="{{$client->id}}" >{{$client->name}}</option>

                      @endforeach

                      </select>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>


            <!-- /.card -->
          </div>
          <!--/.col (right) -->

            @endif
          <!-- left column -->


        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
      <div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
