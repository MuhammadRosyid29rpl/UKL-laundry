<!DOCTYPE html>
<html>
	<head>
		 <link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.m
		in.css" rel="stylesheet" integrity="sha384-
		+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
		crossorigin="anonymous">
		 <title></title>
	</head>
	<body>
	<div class="container mt-5 pt-5">
		 <h3>Daftar Paket</h3>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>Jenis Paket</th><th>Harga</th><th>AKSI</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "koneksi.php";
		$qry_laundry=mysqli_query($conn,"select * from paket");
		 $no=0;
		 while($data_paket=mysqli_fetch_array($qry_laundry)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_paket['jenis']?></td>
		<td><?=$data_paket['harga']?></td>
		
		<td><a href="ubah_paket.php?id=<?=$data_paket['id']?>"
		class="btn btn-success">Ubah</a> | <a
		href="hapus_paket.php?id=<?=$data_paket['id']?>"
		onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
		 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
		 </table>
		 <script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
		dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	</body>
</html>