<?php	
	if(!defined('INDEX')) die("");
?>

<h4 class="mt-4">Data Pegawai</h4>
<hr>
<a class="btn btn-info" href="?hal=pegawai_tambah"><i class="oi oi-plus"></i>  Tambah Data</a>
<div class="table-responsive mt-4">
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Jabatan</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$pegawai = mysqli_query($con, "SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan");
				$i = 1;
				foreach ($pegawai as $data):
			?>
			<tr>
				<td><?= $i ?></td>
				<td><img src="images/<?php echo $data['foto']; ?>" class="img-fluid" width="150px"></td>
				<td><?= $data['nama_pegawai']; ?></td>
				<td><?= $data['jenis_kelamin']; ?></td>
				<td><?= $data['tgl_lahir']; ?></td>
				<td><?= $data['nama_jabatan']; ?></td>
				<td><?= $data['keterangan']; ?></td>
				<td>
				<a href="?hal=pegawai_edit&id=<?=$data['id_pegawai'];?>" 
						class="btn btn-sm btn-warning mb-1"><i class="oi oi-pencil"></i> Edit </a>
					<a href="?hal=pegawai_hapus&id=<?=$data['id_pegawai'];?>" 
						class="btn btn-sm btn-danger"> <i class="oi oi-trash"></i>Hapus </a>
				</td>
			</tr>
			<?php
				$i++;
			endforeach;
			?>
		</tbody>
</table>