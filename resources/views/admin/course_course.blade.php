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
            <div class="card-header text-right">
                <a href="/course/create">+ Tambah Data</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>#</th>  
                  <th>Title</th>
                  <th>Short Description</th>
                  <th>Top Course</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d) 
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a href="/detailcourseadmin/{{ $d->id }}">{{ $d->title }}</a></td>
                        <td>{{ Str::limit($d->short_description, 40, '...') }}</td>
                        <td>{{ $d->is_topcourse === 1 ? "Yes" : "No"}}</td>
                        <td>{{ $d->kategori->name }}</td>
                        <td> 
                            <form action="/course/{{ $d->id }}" method="POST">
                            {{-- Update  --}}
                            <a type="button" href="/course/{{ $d->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                            @method("delete")
                            @csrf
                            {{-- Delete  --}}
                            <button type="submit"class="btn btn-danger btn-sm">Hapus</button>
                            </form>                       
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>  
                  <th>Title</th>
                  <th>Short Description</th>
                  <th>Top Course</th>
                  <th>Category</th>
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
    </section>
    <!-- /.content -->
  </div>
@endsection