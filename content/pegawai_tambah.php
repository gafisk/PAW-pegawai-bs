<?php
	if(!defined('INDEX')) die("");
?>

<h4 class="mt-4"> Tambah Data Pegawai</h4>
<hr>
<form class="mb-5" method="POST" action="?hal=pegawai_insert" enctype="multipart/form-data">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Foto</label>
		<div class="col-sm-10">
			<div class="custom-file">
				<label for="foto" class="custom-file-label"></label>
				<input type="file" name="foto" id="foto" class="custom-file-input">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nama Lengkap</label>
		<div class="col-sm-10">
			<input type="text" name="nama" id="nama" class="form-control">
		</div>
	</div>

	<div class="form-group row"> 
		<label class="col-sm-2 col-form-label">Jenis Kelamin</label><br>
		<div class="col-sm-10">
			<div class="custom-control custom-radio custom-control-inline">
				<input class="custom-control-input" type="radio" name="jk" id="jkl" value="L"> 
				<label for="jkl" class="custom-control-label">Laki-laki</label>
	
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="custom-control-input" type="radio" name="jk" id="jkp" value="P">
				<label for="jkp" class="custom-control-label">Perempuan</label>
			</div>
		</div>
	</div>

	<div class="form-group row">
		<label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
		<div class="col-sm-2">
			<input class=" form-control-plaintext" type="date" name="tanggal" id="tanggal">
		</div>	
	</div>

	<div class="form-group row">
		<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
		<div class="col-sm-10">
			<select class="custom-select" name="jabatan" id="jabatan" class="input">
				<option disabled selected>- Pilih Jabatan -</option>
				<?php 
					$jabatan = query("SELECT * FROM jabatan");
					foreach ($jabatan as $data):
				?>
				<option value="<?=$data['id_jabatan']?>"><?= $data['nama_jabatan']?></option>
			<?php endforeach; ?>
			</select>
		</div>
	</div>

	<div class="form-group row">
	 	<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
		 <div class="col-sm-10">
		 	<textarea class="form-control" id="keterangan" name="keterangan"></textarea>
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