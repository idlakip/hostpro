  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>/template/index3.html" class="brand-link">
      <img src="<?= base_url(); ?>/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin LAKIP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>/home/about" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/home" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <span class="right badge badge-danger">Proses</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/home/about" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                About
                <span class="right badge badge-danger">Proses</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/lakip" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                LAKIP
                <span class="right badge badge-danger">Proses</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/lakip/personal" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Contact
                <span class="right badge badge-danger">Proses</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/home/map" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Map
                <span class="right badge badge-danger">OK</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/home/charts" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Chart
                <span class="right badge badge-danger">Proses</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/kantor" class="nav-link">
              <i class="nav-icon fas fa-hotel"></i>
              <p>
                Kantor
                <span class="right badge badge-danger">OK</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url(); ?>/lakip/invoice" class="nav-link">
              <i class="nav-icon fas fa-hotel"></i>
              <p>
                Invoice
                <span class="right badge badge-danger">OK</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>