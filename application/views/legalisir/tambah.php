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
 echo form_open_multipart(base_url('legalisir_surat/tambah')); 
 ?>

            <div class="card-body">
                
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
                            <label for="kelas">Kelas</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                        <select class="custom-select" name="kelas">
                          <option <?php if (set_value('kelas') == 'VII') echo 'selected';?>>VII</option>
                          <option <?php if (set_value('kelas') == 'VIII') echo 'selected';?>>VIII</option>
                          <option <?php if (set_value('kelas') == 'IX') echo 'selected';?>>IX</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tujuan">Tujuan Legalisir</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Tujuan Legalisir" name="tujuan" value="<?= set_value('tujuan')?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-3">
                        <div class="form-group">
                            <label for="file">File Surat</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile" value="<?=set_value('file_surat')?>">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
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
