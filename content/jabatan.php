<?php	
	if(!defined('INDEX')) die('');
?>

<h4 class="mt-4">Data Jabatan</h4>
<hr>
<a class="btn btn-info" href="?hal=jabatan_tambah"><i class="oi oi-plus"></i>  Tambah Data</a>
<div class="table-responsive mt-4">
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Jabatan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan");
				$i = 1;
				foreach ($query as $data):
			?>
			<tr>
				<td><?= $i ?></td>
				<td><?= $data['nama_jabatan']; ?></td>
				<td>
					<a href="?hal=jabatan_edit&id=<?=$data['id_jabatan'];?>" 
						class="btn btn-sm btn-warning"><i class="oi oi-pencil"></i> Edit </a>
					<a href="?hal=jabatan_hapus&id=<?=$data['id_jabatan'];?>" 
						class="btn btn-sm btn-danger"> <i class="oi oi-trash"></i>Hapus </a>
				</td>
			</tr>
			<?php
				$i++;
			endforeach;
			?>
		</tbody>
	</table>
</div>