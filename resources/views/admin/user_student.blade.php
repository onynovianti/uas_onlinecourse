@extends('partials.main_back')

@section('konten')
@include('sweetalert::alert')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Data Student</h1>
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
            <div class="card-header text-right">
                <a href="/user_student/create">+ Tambah Data</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>#</th>  
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Course</th>
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
                        <td>{{ $d->is_active === 0 ? "Inactive" : "Active" }}</td>
                        <td>
                          <ul>
                            @foreach ($d->kursus as $k)
                              <li>{{ $k->title }}</li>
                            @endforeach
                          </ul>
                        </td>
                        <td>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">Action &nbsp;
                                <span class="sr-only">Toggle Dropdown</span>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" onclick="location.replace('/user_student/{{ $d->id }}/edit')">Edit</a>
                                  <form action="/user_admin/{{ $d->id }}" method="POST" id="hapus">
                                    @method("delete")
                                    @csrf
                                    {{-- Delete  --}}
                                    <a class="dropdown-item" type="submit" onclick="document.getElementById('hapus').submit();">Delete</a>
                                  </form>
                                  <form action="/setactive/{{ $d->id }}" method="POST" id="setactive">
                                    @csrf
                                    {{-- Delete  --}}
                                    <a class="dropdown-item" type="submit" onclick="document.getElementById('setactive').submit();">Set Active</a>
                                  </form>
                                  <div class="dropdown-divider"></div>
                                  <form action="/setinactive/{{ $d->id }}" method="POST" id="setinactive">
                                    @csrf
                                    {{-- Delete  --}}
                                    <a class="dropdown-item" type="submit" onclick="document.getElementById('setinactive').submit();">Set Inactive</a>
                                  </form>
                                </div>
                              </button>
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
                    <th>Status</th>
                    <th>Course</th>
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