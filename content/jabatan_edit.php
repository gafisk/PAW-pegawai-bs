<?php	
	if(!defined('INDEX')) die('');

	$query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]'");
	$data = mysqli_fetch_array($query);
?>

<h4 class="mt-4"> Edit Jabatan</h4>
<hr>
<form class="mb-5" method="POST" action="?hal=jabatan_update">
	<input type="hidden" name="id" value="<?= $data['id_jabatan']; ?>" >

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-8">
			<input class="form-control" type="text" name="nama" id="nama" value="<?= $data['nama_jabatan']; ?>">
		</div>
	</div>

	<div class="float-right mb-5">
        <button type="submit" class="btn btn-info">
            <i class="oi oi-task"> Simpan</i>
        </button>
        <button type="reset" class="btn btn-warning">
            <i class="oi oi-circle-x"> Reset</i>
        </button>
    </div>
</form>