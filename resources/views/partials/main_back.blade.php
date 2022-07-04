@include('partials.head_back')
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('partials.navbar_back')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('partials.sidebar_back')

  <!-- Content Wrapper. Contains page content -->
  @yield('konten')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('partials.footer_back')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('partials.foot_back')
