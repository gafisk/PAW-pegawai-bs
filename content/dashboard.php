<?php
	if(!defined('INDEX')) die('');
?>

<div class=" card-header mt-5 mb-5 ">
	<h1> Selamat Datang di </h1>
	<h1 class="display-4"> Aplikasi Manajemen Pegawai </h1>
	<h3> Anda login sebagai Administrator </h3>
</div>

<?php

$jml_pegawai = mysqli_num_rows(mysqli_query($con, "SELECT * FROM pegawai"));
$jml_jabatan = mysqli_num_rows(mysqli_query($con, "SELECT * FROM jabatan")); 

?>

<div class="row">
	<div class="col-xl-3 col-md-3 mb-0">
	</div>
	<div class="col-xl-3 col-md-3 mb-3">
		<div class="card border-4 border-bottom-0 border-end-0 border-start-0 border-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Pegawai</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">
							<?= $jml_pegawai; ?>
						</div>
					</div>
					<div class="col-auto">
						<i class="oi oi-person display-4 text-dark text-opacity-25"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-3 mb-3">
		<div class="card border-4 border-bottom-0 border-end-0 border-start-0 border-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
							Jabatan</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">
							<?= $jml_jabatan; ?>
						</div>
					</div>
					<div class="col-auto">
						<i class="oi oi-sort-descending display-4 text-dark text-opacity-25"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>