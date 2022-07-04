@extends('partials.main_back')

@section('konten')
@include('sweetalert::alert')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Data Pending Payment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item">Payment</li>
              <li class="breadcrumb-item active">Pending</li>
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
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>#</th>  
                  <th>Username</th>
                  <th>Course Name</th>
                  <th>Document</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d) 
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a href="about{id}">{{ $d->student->name }}</a></td>
                        <td><a href="about{id}">{{ $d->kursus->title }}</a></td>
                        <td><img src="{{ asset('assets/images/user_icon.png') }}" width="150" height="150"></td>
                        <td>{{ $d->kursus->price }}</td>
                        <td> 
                          <form action="/verifikasi/{{ $d->id }}" method="POST" id="verifikasi">
                            @csrf
                            {{-- Delete  --}}
                            <a type="button" class="btn btn-outline-success btn-sm" type="submit" onclick="document.getElementById('verifikasi').submit();">Verifikasi</a>
                          </form>                    
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>  
                  <th>Username</th>
                  <th>Course Name</th>
                  <th>Document</th>
                  <th>Price</th>
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