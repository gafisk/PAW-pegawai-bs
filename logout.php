<?php 
	session_start();
	session_destroy();
	echo "<script>alert('Anda telah logout!')</script><br>";
	echo "<meta http-equiv='refresh' content='2;url=login.php'>";
?>