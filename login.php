<?php
	session_start();
	include "library/config.php";
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<title>Login Aplikasi</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">

		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body class="h-100 bg-dark d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 mx-auto bg-gradient p-4">
					<h3 class="text-center text-info pb-3 mb-3 border-bottom">Login Aplikasi</h3>
					<form method="POST" role="form">
						<input class="form-control form-control-lg mb-3" type="text" placeholder="Username" name="username">
						<input class="form-control form-control-lg mb-3" type="password" placeholder="Password" name="password">
						<input class="form-control btn btn-info btn-lg mb-3" type="submit" value="Login" name="submit">
					</form>

					<?php  
						if (isset($_POST["submit"])){
							$username = $_POST['username'];
							$password = $_POST['password'];

							$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'" );

							if ($jml = mysqli_num_rows($query) > 0){
								$data = mysqli_fetch_array($query);
								$_SESSION['username'] = $data['username'];
								$_SESSION['password'] = $data['password'];

								echo "<div class='alert alert-success mb-3'>Login Sukses</div>";
								header('location: index.php?halaman=dashboard');	
							} else {
								echo "<div class='alert alert-danger mb-3'>Login Gagal</div>";
								echo "<meta http-equiv='refresh' content='2;url=login.php'>";
							}
						}

						
					?>

				</div>
				
			</div>
		</div>
	</body>
</html>