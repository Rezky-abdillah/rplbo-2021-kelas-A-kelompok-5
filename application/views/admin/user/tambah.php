<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="background-color: #BEC3C2;margin:1rem;margin-top:7rem;">
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
 echo form_open_multipart(base_url('admin/user/tambah')); 
 ?>

 <div class="card-body">
 	<div class="row">

 		<div class="col-md-6">
 			<div class="form-group">
 				<label for="nama">Nama Lengkap</label>
 				<input type="text" class="form-control" placeholder="Nama lengkap" name="nama" value="<?= set_value('nama058')?>" required>
 			</div>
 			
 			<div class="form-group">
 				<label for="username">Username</label>
 				<input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username058')?>" required>
 			</div>
			<div class="form-group">
 				<label for="password">Password</label>
 				<input type="password" class="form-control" placeholder="password" name="password" value="<?= set_value('password058')?>" required>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="form-group">
 				<label for="akses_level">Level hak akses</label>
 				<select class="form-control" name="level" style="width: 100%;">
 					<option>----- PILIH HAK AKSES -----</option>
 					<option><?php if (set_value('level') == 'SISWA') echo 'selected';?>SISWA</option>
                    <option><?php if (set_value('level') == 'GURU') echo 'selected';?>GURU</option>
                    <option><?php if (set_value('level') == 'RESEPSIONIS') echo 'selected';?>RESEPSIONIS</option>
                    <option><?php if (set_value('level') == 'STAFF TU') echo 'selected';?>STAFF TU</option>
                    <option><?php if (set_value('level') == 'KEPALA TU') echo 'selected';?>KEPALA TU</option>
                    <option><?php if (set_value('level') == 'KEPALA SEKOLAH') echo 'selected';?>KEPALA SEKOLAH</option>

 				</select>
 			</div>
			 
 			
 			<div class="form-group">
 				<input type="submit" name="simpan" class="btn btn-info" value="Simpan Data">
 				<input type="reset" name="reset" class="btn btn-secondary" value="Reset">
 				<a href="<?php echo base_url('admin/user')?>" class="btn btn-primary">
 				<i class="fas fa-backward"></i></a>
 			</div>
 		</div>
 			</div>
 		</div>

 		<?php 
 		echo form_close(); ?>

</div>
        </div>
      </div>
</section>
