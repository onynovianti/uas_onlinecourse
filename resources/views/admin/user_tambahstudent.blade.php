@extends('partials.main_back')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Tambah Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item">User</li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="col-md-12">
                <!-- general form elements -->
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="/user_student" method="POST">@csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name" value="{{ old('name') }}">
                        @error('name')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{ old('password') }}">
                        @error('password')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a class="btn btn-default float-right" href="/user_student">Cancel</a>
                    </div>
                  </form>
                <!-- /.card -->
    
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection