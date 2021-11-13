<?php	
	session_start();
	ob_start();

	include "library/config.php";

	function query($query){
	    global $con;
	    $result = mysqli_query($con, $query);
	    $rows = [];
	    while ($row = mysqli_fetch_assoc($result)) {
	        $rows[] = $row;
	    }
	    return $rows;
	}

	if(empty($_SESSION['username'])or empty($_SESSION['password'])){
		echo "<script>alert('Anda harus masuk!')</script>";
		echo "<meta http-equiv='refresh' content='2;url=login.php'>";
	} else {
		define('INDEX', true);
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/open-iconic/font/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="plugin/DataTables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="plugin/DataTables/datatables.min.css"/>
</head>
<body class="h-100">

		<!-- NAVBAR DROPDOWN -->
	<nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
		<a href="" class="navbar-brand"> 
			<div class="mx-3">Manajemen Pegawai</div>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<nav class="collapse navbar-collapse" id="sidebar">
			<ul class="navbar-nav d-sm-none">
				<li class="nav-item">
					<a class="nav-link text-white" href="?hal=dashboard">
						<i class=""></i> Dashboard
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="?hal=pegawai">
						<i class=""></i> Data Pegawai
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="?hal=jabatan">
						<i class=""></i> Data Jabatan
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="logout.php">
						<i class=""></i> Logout
					</a>
				</li>
			</ul>
		</nav>
	</nav>

	<!-- END NAVBAR DROPDOWN -->

	<!-- NAVBAR SIDE -->
	<div class="container-fluid h-100">
		<div class="row h-100">
			<nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
				<ul class="list-group list-group-flush">
					<li class="list-group-item bg-dark">
						<a class="nav-link text-white" href="?hal=dashboard">
							<i class="oi oi-dashboard"></i> Dashboard
						</a>
					</li>
					<li class="list-group-item bg-dark">
						<a class="nav-link text-white" href="?hal=pegawai">
							<i class="oi oi-person"></i> Data Pegawai
						</a>
					</li>
					<li class="list-group-item bg-dark">
						<a class="nav-link text-white" href="?hal=jabatan">
							<i class="oi oi-sort-descending"></i> Data Jabatan
						</a>
					</li>
					<li class="list-group-item bg-dark">
						<a class="nav-link text-white" href="logout.php">
							<i class="oi oi-account-logout"></i> Logout
						</a>
					</li>
				</ul>
			</nav>
			<div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">
				<section>
					<?php include "content/konten.php"; ?>
				</section>
			</div>
		</div>
	</div>

	<!-- END NAVBAR SIDE -->

	<!-- FOOTER -->

	<div class="bg-light fixed-bottom">
		<p class="m-2 text-center text-muted"> Pemrograman Aplikasi Web </p></p>
	</div>

	<!-- END FOOTER -->

	<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="plugin/DataTables/js/jquery.dataTables.min.js"></script>
	<script src="plugin/DataTables/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="plugin/DataTables/datatables.min.js"></script>
	

	<script>
		$(function(){
			$('.table').DataTable();
		});
	</script>

</body>
</html>
<?php
	}
?>