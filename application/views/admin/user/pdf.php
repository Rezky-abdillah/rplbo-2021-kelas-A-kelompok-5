<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align: center;">Laporan user SIMPEG</h2>
</hr>
<table border="1" style="text-align:center;" width="100%">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Username</th>
						<th>Password</th>
						<th>Level Akses</th>
						<th>Keterangan</th>
						<th>Photo</th>
					</tr>
					<?php $i= 1; foreach ($user as $user) {?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $user->nama058 ?></td>
						<td><?= $user->email058 ?></td>
						<td><?= $user->username058 ?></td>
						<td><?= $user->password058 ?></td>
						<td><?= $user->akses_level058 ?></td>
						<td><?= $user->keterangan058 ?></td>
						<td class="text-center"><?php if ($user->photo058 != "") {?>
							<img src="<?= base_url('assets/user/'.$user->photo058)?>" class="img img-thumbnail" width="60" height="90">
						<?php } else{echo"Tidak Ada Photo";}?>
						</td>
						
					</tr>
					<?php T_ENDFOREACH; } ?>
			</table>
</body>
</html>
