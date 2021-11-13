<?php
	if(!defined('INDEX')) die("");

	$query = mysqli_query($con, "UPDATE jabatan SET nama_jabatan = '$_POST[nama]' WHERE id_jabatan ='$_POST[id]'");

	if($query){
		echo "<div class='alert alert-success mt-4'>Data berhasil diubah! </div>";
		echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
	} else {
		echo "<div class='alert alert-success mt-4'>Tidak dapat merubah data! </div> <br>";
		echo mysqli_error();
	}
?>
