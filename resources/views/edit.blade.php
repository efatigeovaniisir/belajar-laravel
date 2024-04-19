@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <form action="{{ route('update',['id' => $data->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Form Tambah User</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form >
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $data->email }}" placeholder="Masukan Email">
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nama</label>
                          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{ $data->name }}" placeholder="Masukan Nama">
                          @error('nama')
                            <small>{{ $message }}</small>
                        @enderror
                        </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                      </div>
                      {{-- <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> --}}
                    </div>
                    <!-- /.card-body -->
  
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.roe -->
            </div>
            <!-- /.row -->
          </form>
          
        </div>
        <!-- /.container-fluid -->
                 
      </section>


</div>


@endsection