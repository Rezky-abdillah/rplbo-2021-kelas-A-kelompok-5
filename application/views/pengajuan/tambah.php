<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="background-color: #BEC3C2;margin:1rem;">
                <div class="card-body" >
                    <h5><?= $menu?></h5>
                </div>
            </div>
<?php 
//ntifikasi jika ada input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>','</div>');
// open form 

if (isset($error)) {
 	echo '<div class = "alert alert-warning">';
 	echo $error;
 	echo '</div>';
 }
 echo form_open_multipart(base_url('pengajuan_surat/tambah')); 
 ?>

            <div class="card-body">
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kode_surat">Kode Surat</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Kode Surat" name="kode_surat" value="<?= set_value('kode_surat')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="status_pengguna">Status Pengguna</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                        <select class="custom-select" name="status_pengguna">
                          <option><?php if (set_value('status_pengguna') == 'SISWA') echo 'selected';?>SISWA</option>
                          <option><?php if (set_value('status_pengguna') == 'GURU') echo 'selected';?>GURU</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama" value="<?= set_value('nama')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nomor_induk">Nomor Induk</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Nomor Induk" name="nomor_induk" value="<?= set_value('nomor_induk')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Masukkan Kode Surat" name="tgl_lahir" value="<?= set_value('tgl_lahir')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki" 
                                <?php echo  set_radio('jenis_kelamin', 'Laki-Laki'); ?> required>
                                <label for="laki" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" 
                                <?php echo  set_radio('jenis_kelamin', 'Perempuan'); ?> required>
                                <label for="perempuan" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" value="<?= set_value('alamat')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan No HP" name="no_hp" value="<?= set_value('no_hp')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Masukkan Kode Surat" name="email" value="<?= set_value('email')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                        <select class="custom-select" name="kelas">
                          <option><?php if (set_value('kelas') == 'VII') echo 'selected';?>VII</option>
                          <option><?php if (set_value('kelas') == 'VIII') echo 'selected';?>VIII</option>
                          <option><?php if (set_value('kelas') == 'IX') echo 'selected';?>IX</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kategori">Kategori Surat</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="Surat Aktif Sekolah" name="kategori" value="Surat Aktif Sekolah">
                                <label for="Surat Aktif Sekolah" class="custom-control-label">Surat Aktif Sekolah</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="Surat Tidak Menerima Beasiswa" name="kategori" value="Surat Tidak Menerima Beasiswa">
                                <label for="Surat Tidak Menerima Beasiswa" class="custom-control-label">Surat Tidak Menerima Beasiswa</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="kategori" name="kategori" >
                                <label for="kategori" class="custom-control-label">Lainnya</label>
                            </div>
                            <input type="text" class="form-control" placeholder="Masukkan Kategori lain" name="kategori" >
                        </div>
                    </div>
                </div>
                <div class="form-group float-end">
                    <input type="reset" name="reset" class="btn btn-danger" value="RESET">
                    <input type="submit" name="simpan" class="btn btn-success" value="SAVE">
                </div>

                    <?php 
                    echo form_close(); ?>

            </div>
        </div>
      </div>
</section>
