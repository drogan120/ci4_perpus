  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?= base_url('assets/img/icon/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">PERPUSTAKAAN</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= base_url('assets/img/icon/AdminLTELogo.png') ?>" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Ali Mahmudin</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview">
                      <a href="<?= base_url('dashboard') ?>" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  <li class="nav-header">DATA</li>
                  <li class="nav-item">
                      <a href="<?= base_url('buku') ?>" class="nav-link">
                          <i class="fas fa-book nav-icon"></i>
                          <p>Buku</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('peminjaman') ?>" class="nav-link">
                          <i class="fas fa-book nav-icon"></i>
                          <p>Peminjaman</p>
                      </a>
                  </li>
                  <li class="nav-header">Users</li>
                  <li class="nav-item">
                      <a href="<?= base_url('anggota') ?>" class="nav-link">
                          <i class="fas fa-users nav-icon"></i>
                          <p>Anggota</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                          <i class="fas fa-sign-out-alt nav-icon"></i>
                          <p>Logout</p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>