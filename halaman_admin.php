<?php
include "header.php";?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
 
	<br/>
	<br/>
 
	
</body>
</html>