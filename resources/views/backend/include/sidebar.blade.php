<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="assets/imgs/logo-3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Rosy</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
  

    <!-- SidebarSearch Form -->
   

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="{{url('/admin')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="{{url('/banner')}}" class="nav-link">
            <i class="nav-icon fas fa-camera"></i>
            <p>
              Banner
             
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/aboutlist')}}" class="nav-link">
            <i class="nav-icon fa fa-history"></i> 
            <p>
              Abouts
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/storyIndex')}}" class="nav-link">
            <i class="nav-icon fa fa-pen"></i> 
            <p>
             Story
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('showfood')}}" class="nav-link">
            <i class="nav-icon fas fa-cheese"></i>
            <p>
             Food
             
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('showMenu')}}" class="nav-link">
            <i class="nav-icon fas fa-hamburger"></i>
            <p>
              Main Menu
             
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('showteam')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Show Team
             
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('showtest')}}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Testmonials
             
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('showtable')}}" class="nav-link">
            <i class="nav-icon fas fa-utensils"></i>
            <p>
              Book Table
             
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>