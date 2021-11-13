<?php	
	if(!defined('INDEX')) die('');
?> 

<h4 class="mt-4"> Tambah Data Jabatan</h4>
<form class="mb-5" method="POST" action="?hal=jabatan_insert">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" >Nama Jabatan</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" id="nama" name="nama" class="input">
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

