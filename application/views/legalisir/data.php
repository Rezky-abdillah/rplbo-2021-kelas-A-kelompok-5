<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="background-color: #BEC3C2;margin:1rem;margin-top:7rem;">
                <div class="card-body" >
                    <h5><?= $menu?></h5>
                </div>
            </div>

            <a href="<?= base_url()?>legalisir_surat/tambah" class="btn btn-success ml-3 mb-3">
                <i class="fa fa-plus"></i> Legalisir Surat
            </a>

            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor Induk</th>
                            <th>Kelas</th>
                            <th>Tujuan Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i= 1; foreach ($legalisir as $legalisir) {?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $legalisir->nama ?></td>
                            <td><?= $legalisir->nomor_induk ?></td>
                            <td><?= $legalisir->kelas ?></td>
                            <td><?= $legalisir->tujuan ?></td>
                            
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </div>
            </div>
          </div>
        </div>
      </div>
</section>