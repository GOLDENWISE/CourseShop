<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #702228;">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
      
      <div class="sidebar-brand-text mx-3"><img src="{{ asset('img/CourseShop Logo admin.png') }}" width=50px height=50px alt=""></div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
      <a class="nav-link" href="{{ route('home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ $title }}</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
      Menu
  </div>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link" href="http://127.0.0.1:8000/tables">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pembelian</span>
      </a>
      <a class="nav-link" href="http://127.0.0.1:8000/tables">
          <i class="fas fa-fw fa-table"></i>
          <span>Data User</span>
      </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
</ul>