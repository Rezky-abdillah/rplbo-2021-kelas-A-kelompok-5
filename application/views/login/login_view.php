
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url()?>assets/lugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url()?>"><b>SIMPEG</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sistem Informasi Pegawai</p>

      <form action="<?= base_url('login')?>" method="POST">
      <?php echo $this->session->flashdata('message');
          echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>','</div>');
          ?>  


        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username..">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
                <select class="custom-select" name="level">
                    <option><?php if (set_value('level') == 'SISWA') echo 'selected';?>SISWA</option>
                    <option><?php if (set_value('level') == 'GURU') echo 'selected';?>GURU</option>
                    <option><?php if (set_value('level') == 'RESEPSIONIS') echo 'selected';?>RESEPSIONIS</option>
                    <option><?php if (set_value('level') == 'STAFF TU') echo 'selected';?>STAFF TU</option>
                    <option><?php if (set_value('level') == 'KEPALA TU') echo 'selected';?>KEPALA TU</option>
                    <option><?php if (set_value('level') == 'KEPALA SEKOLAH') echo 'selected';?>KEPALA SEKOLAH</option>
                </select>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
