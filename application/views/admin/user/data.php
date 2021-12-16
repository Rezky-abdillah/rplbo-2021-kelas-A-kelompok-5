<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="background-color: #BEC3C2;margin:1rem;margin-top:7rem;">
                <div class="card-body" >
                    <h5><?= $menu?></h5>
                </div>
            </div>
<p>
	<a href="<?= base_url('admin/user/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Data
	</a>
	<a href="<?php echo base_url('admin/user/print') ?>" class ="btn btn-danger">
		<i class="fa fa-print"></i> Print
	</a>

	<a href="<?php echo base_url('admin/user/pdf') ?>" class ="btn btn-warning">
		<i class="fa fa-download"></i> Export PDF
	</a>
</p>

<?php
echo validation_errors('<div class ="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');
//nontifikasi
if($this->session->flashdata('sukses')){?>
<script>
Swal.fire({
	// position: 'top-end',
	icon: 'success',
	title: "<?= $this->session->flashdata('sukses');?>",
	showConfirmButton: false,
	timer: 2000
});
</script>
<?php } ?>
			<table id="example1" class="table table-bordered table-hover">
				<thead>
					<tr class="text-center">
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Username - Level Hak Aksi</th>
						<th>Keterangan</th>
						<th>Photo</th>
						<th width="18%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i= 1; foreach ($user as $user) {?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $user->nama058 ?></td>
						<td><?= $user->email058 ?></td>
						<td><?= $user->username058 ?> - <?= $user->akses_level058 ?></td>
						<td><?= $user->keterangan058 ?></td>
						<td class="text-center"><?php if ($user->photo058 != "") {?>
							<img src="<?= base_url('assets/user/'.$user->photo058)?>" class="img img-thumbnail" 
							width="60" height="90">
						<?php } else{echo"Tidak Ada Photo";}?>
						</td>
						<td class="text-center">
							<a href="<?= base_url('admin/user/edit/'.$user->id_user058) ?>" 
							class="btn btn-warning btn-xs">
							<i class="fa fa-edit"></i>Edit</a>
							<?php include 'delete.php'; ?>
							<?php include 'detail.php'; ?>
						</td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			</table>

			</div>
        </div>
      </div>
</section>