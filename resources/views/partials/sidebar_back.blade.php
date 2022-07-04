<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('assets/images/favicon.png') }}"
           alt="OnlineCourse Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Online Course</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/images/user_icon.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $nama }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin" class="nav-link {{ strpos($title, 'Dashboard') !== false ? "active" : "" }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ strpos($title, 'Courses') !== false ? "menu-open" : "" }}">
            <a href="#" class="nav-link {{ strpos($title, 'Courses') !== false ? "active" : "" }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Courses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/course" class="nav-link {{ strpos($title, 'Category') === false && strpos($title, 'Courses') !== false ? "active" : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/category" class="nav-link {{ strpos($title, 'Category') !== false ? "active" : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Course Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ strpos($title, 'User') !== false ? "menu-open" : "" }}">
            <a href="#" class="nav-link {{ strpos($title, 'User') !== false ? "active" : "" }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/user_admin" class="nav-link {{ strpos($title, 'Admin') !== false ? "active" : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/user_student" class="nav-link {{ strpos($title, 'Student') !== false ? "active" : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/user_instructor" class="nav-link {{ strpos($title, 'Instructor') !== false ? "active" : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Instructor</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ strpos($title, 'Payment') !== false ? "menu-open" : "" }}">
            <a href="#" class="nav-link {{ strpos($title, 'Payment') !== false ? "active" : "" }}">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Offline Payment
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/payment" class="nav-link {{ strpos($title, 'Pending') !== false ? "active" : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/acceptedpayment" class="nav-link {{ strpos($title, 'Accept') !== false ? "active" : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accepted Request</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">ACTION</li>
          <li class="nav-item">
            <form action="/logout" method="post" id="logout"> @csrf
            <a class="nav-link" onclick="document.getElementById('logout').submit()">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>