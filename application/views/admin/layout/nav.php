  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIMPEG</span>
    </a>
<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><h5><?= $this->session->userdata('username'); ?></h5></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/user')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/user/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/golongan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Golongan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/jabatan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jabatan</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/master_pangkat')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pangkat</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/master_jurusan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/hukuman')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Hukuman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/pelatihan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pelatihan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/penghargaan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penghargaan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pegawai
                <i class="fas fa-angle-left right"></i>
                 <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/pegawai')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/pegawai/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pegawai</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Keluarga
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/keluarga')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/keluarga/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Keluarga</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Pendidikan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/pendidikan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/riwayat_pendidikan/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pendidikan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Riwayat Jabatan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/riwayat_jabatan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/riwayat_Jabatan/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Jabatan</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Riwayat Pangkat
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/riwayat_pangkat')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pangkat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/riwayat_pangkat/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pangkat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Presensi
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/presensi')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Presensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('genbar')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Code</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/presensi/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?= base_url('login/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $menu ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <!-- small box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $menu?></h3>
              </div><!-- /.card-header -->
              <div class="card-body">