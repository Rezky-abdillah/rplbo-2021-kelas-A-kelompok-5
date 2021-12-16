<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="background-color: #BEC3C2;margin:1rem;margin-top:7rem;">
                <div class="card-body" >
                    <h5><?= $menu?></h5>
                </div>
            </div>

            <a href="<?= base_url()?>pengajuan_surat/tambah" class="btn btn-success ml-3 mb-3">
                <i class="fa fa-plus"></i> Pengajuan Surat
            </a>

            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>KODE</th>
                            <th>STATUS</th>
                            <th>NAMA LENGKAP</th>
                            <th>NOMOR INDUK</th>
                            <th>TEMPAT/TAGGAL LAHIR</th>
                            <th>NO HP</th>
                            <th>EMAIL</th>
                            <th>KELAS</th>
                            <th>ALAMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i= 1; foreach ($pengajuan as $pengajuan) {?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $pengajuan->kode_surat ?></td>
                            <td><?= $pengajuan->status_pengguna ?></td>
                            <td><?= $pengajuan->nama ?></td>
                            <td><?= $pengajuan->nomor_induk ?></td>
                            <td><?= $pengajuan->tempat_lahir ?> / <?= $pengajuan->tgl_lahir ?></td>
                            <td><?= $pengajuan->no_hp ?></td>
                            <td><?= $pengajuan->email ?></td>
                            <td><?= $pengajuan->kelas ?></td>
                            <td><?= $pengajuan->alamat ?></td>
                            
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </div>
            </div>
          </div>
        </div>
      </div>
</section>