@extends('partials.main_back')

@section('konten')
@include('sweetalert::alert')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Data Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item">User</li>
              <li class="breadcrumb-item active">Admin</li>
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
                <a href="/user_admin/create">+ Tambah Data</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>#</th>  
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d) 
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><img src="{{ asset('assets/images/user_icon.png') }}" width="150" height="150"></td>
                        <td><a href="about{id}">{{ $d->name }}</a></td>
                        <td>{{ $d->email }}</td>
                        <td> 
                            <form action="/user_admin/{{ $d->id }}" method="POST">
                            {{-- Update  --}}
                            <a type="button" href="/user_admin/{{ $d->id }}/edit" class="btn btn-success btn-sm">Edit</a>
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
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
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