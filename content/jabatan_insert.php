<?php   
    if(!defined('INDEX')) die('');

    $query = mysqli_query($con, "INSERT INTO jabatan SET nama_jabatan = '$_POST[nama]' ");

    if($query){
        echo "<div class='alert alert-success mt-4'>Data berhasil disimpan! </div>";
        echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
    } else {
        echo "<div class='alert alert-danger mt-4'>Tidak dapat menyimpan data! </div>";
        echo mysqli_error();
    }
?>