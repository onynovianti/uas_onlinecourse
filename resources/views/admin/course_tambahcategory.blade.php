@extends('partials.main_back')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Tambah Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item">Course</li>
              <li class="breadcrumb-item active">Course Category</li>
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
                  <form role="form" action="/category" method="POST">@csrf
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
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter description" name="description" value="{{ old('description') }}">
                        @error('description')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror 
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_top">
                        <label class="form-check-label">Check if this course if top course</label>
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a class="btn btn-default float-right" href="/category">Cancel</a>
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