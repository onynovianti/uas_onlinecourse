@extends('partials.main_back') 

@section('konten') 
@include('sweetalert::alert')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Data Course</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item">Course</li>
              <li class="breadcrumb-item active">Course</li>
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
                <table class="table-responsive">
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('storage/uploads/course/'.$course->gambar) }}" width="300" height="200"></td>
                        </tr>
                        <tr>
                            <th>{{ $course->title }}</th>
                        </tr>
                        <tr>
                            <td>Short Description</td>
                            <td>{{ $course->short_description }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $course->description }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $course->kategori->name }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $course->kategori->name }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $course->kategori->name }}</td>
                        </tr>
                    </tbody>
                </table>
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