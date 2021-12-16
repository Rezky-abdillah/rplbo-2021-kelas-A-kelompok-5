<?php
$hal = $this->uri->segment(1);
?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-dark fixed-top" style="background-color: #0c6a5a; color:white;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#" style="margin-bottom:-10px;">
      <img src="<?= base_url()?>assets/img/surat.png" alt="" width="50" height="50">
      <p style="position:relative; margin-top:-50px; margin-left:50px;font-size:18px; ">SURAT MENYURAT <br> MTSN 10 PEKANBARU</p> 
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
        <li class="nav-item  ml-3">
          <a class="nav-link <?=($hal=='dashboard')?'active':'';?>" aria-current="page" href="<?= base_url()?>dashboard">BERANDA</a>
        </li>
      <?php if ($this->session->userdata('level') == "SISWA" || $this->session->userdata('level') == "GURU") {?>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='pengajuan_surat')?'active':'';?>" href="<?= base_url()?>pengajuan_surat">PENGAJUAN SURAT</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='pelacakan_surat')?'active':'';?>" href="<?= base_url()?>pelacakan_surat">PELACAKAN SURAT</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='legalisir_surat')?'active':'';?>" href="<?= base_url()?>legalisir_surat">LEGALISIR SURAT</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='surat_keluar')?'active':'';?>" href="<?= base_url()?>surat_keluar">SURAT KELUAR</a>
          </li>
      <?php } ?>
      <?php if ($this->session->userdata('level') == "RESEPSIONIS" ) {?>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='surat_keluar')?'active':'';?>" href="<?= base_url()?>surat_masuk">SURAT MASUK</a>
          </li>
      <?php } ?>
      <?php if ($this->session->userdata('level') == "STAF TU") {?>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='surat_masuk')?'active':'';?>" href="<?= base_url()?>surat_masuk">SURAT MASUK</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='legalisir_surat')?'active':'';?>" href="<?= base_url()?>legalisir_surat">LEGALISIR SURAT</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='surat_keluar')?'active':'';?>" href="<?= base_url()?>surat_keluar">SURAT KELUAR</a>
          </li>
      <?php } ?>
      <?php if ($this->session->userdata('level') == "KEPALA TU" || $this->session->userdata('level') == "KEPALA SEKOLAH") {?>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='legalisir_surat')?'active':'';?>" href="<?= base_url()?>legalisir_surat">LEGALISIR SURAT</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link <?=($hal=='surat_keluar')?'active':'';?>" href="<?= base_url()?>surat_keluar">SURAT KELUAR</a>
          </li>
      <?php } ?>
      
      </ul>
      
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            <span><?= $this->session->userdata('level');?></span>
        </a>
        <ul class="dropdown-menu">
          <a class="dropdown-item" href=""><i class="fa fa-user"></i> My Account</a>
          <a class="dropdown-item" href="<?= base_url()?>login/logout"><i class="fa fa-sign-out"></i> Logout</a>
        </ul>
      </li>
      </ul> 
    </div>
  </div>
</nav>
<!-- Navbar -->
  <!-- <nav class="navbar navbar-expand navbar-white navbar-dark" style="background-color: #0c6a5a; color:white;"> -->
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-2x" ></i></a>
      </li>
      <img src="<?= base_url()?>assets/img/surat.png" alt="" width="50" height="50">
      <a class="navbar-brand" href="#" style="font-weight: normal !important; font-size:16px;">SURAT MENYURAT <br> MTSN 10 PEKANBARU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link" style="margin-left:1rem;margin-top:5px;font-size: 20px;">BERANDA</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="margin-left:1rem;font-size: 20px;margin-top:5px;">PENGAJUAN SURAT</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="margin-left:1rem;font-size: 20px;margin-top:5px;">PELACAKAN SURAT</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="margin-left:1rem;font-size: 20px;margin-top:5px;">LEGALISIR SURAT</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="margin-left:1rem;font-size: 20px;margin-top:5px;">SURAT KELUAR</a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
          <img class="img-fluid" style="height:30px;" src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" />
            <span>Hi Admin !</span>
        </a>
        <ul class="dropdown-menu">
          <a class="dropdown-item" href=""><i class="fa fa-user"></i> My Account</a>
          <a class="dropdown-item" href=""><i class="fa fa-sign-out"></i> Logout</a>
        </ul>
      </li>
    </ul> 
  </nav> -->
  <!-- /.navbar -->

