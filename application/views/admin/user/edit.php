<?php
//nontifikasi jika ada input error

echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>','</div>');
//open form

echo form_open_multipart(base_url('admin/user/edit/'.$user->id_user058));
?>

<div class="card-body">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $user->nama058?>" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" placeholder="Email" name="email" value="<?= $user->email058?>" required>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" placeholder="username" name="username" value="<?= $user->username058?>" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" placeholder="password" name="password" value="<?= $user->password058 ?>" >
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="akses_level">Level Hak Aksi</label>
				<select class="form-control" name="akses_level" style="width: 100%;">
					<option>--- PILIH HAK AKSES----</option>
					<option <?php if ($user->akses_level058 == 'ADMIN') echo "selected";?>>ADMIN</option>
					<option <?php if ($user->akses_level058 == 'USER') echo "selected";?>>USER</option>
				</select>
			</div>
			<div class="form-group">
				<label for="keterangan">keterangan lain</label>
				<textarea class="form-control" placeholder="keterangan" name="keterangan"><?= $user->keterangan058 ?></textarea>
			</div>
			<div class="form-group">
                <label for="gambar">Photo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile"
                            value="<?= $user->photo058 ?>">
                        <label for="exampleInputFile" class="custom-file-label">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>
			<div class="form-group">
				<?php if($user->photo058 != "") {?>
					<img src="<?= base_url('assets/user/'.$user->photo058)?>" class="img img-thumbnail" width="60" height="90">
				<?php }else{echo"Tidak Ada Photo";} ?>
			</div>
			<div class="form-group">
				<input type="submit" name="edit" class="btn btn-info" value="Simpan Data">
				<input type="reset" class="btn btn-secondary" name="reset" value="Reset">
				<a href="<?php echo base_url('admin/user')?>" class="btn btn-primary">
					<i class="fas fa-backward"> Kembali</i>
				</a>
			</div>
		</div>
<?php
echo form_close();
?>
	</div>
</div>

