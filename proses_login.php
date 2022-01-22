<?php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data_user yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data_user user dengan username dan password yang sesuai
$qry_login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data_user yang ditemukan
$cek = mysqli_num_rows($qry_login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data_user = mysqli_fetch_assoc($qry_login);
 
	// cek jika user login sebagai admin
	if($data_user['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai kasir
	}else if($data_user['role']=="kasir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "kasir";
		// alihkan ke halaman dashboard kasir
		header("location:halaman_kasir.php");
 
	// cek jika user login sebagai owner
	}else if($data_user['role']=="owner"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "owner";
		// alihkan ke halaman dashboard owner
		header("location:halaman_owner.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>

