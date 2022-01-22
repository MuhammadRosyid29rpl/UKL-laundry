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
    <nav class="navbar navbar-expand-lg navbar-light bg-light"
style="box-shadow: 4px 4px 5px -4px;">
<div class="container-fluid">
<a class="navbar-brand" href="#"> LAUNDRY </a>

<button class="navbar-toggler" type="button" data-bs-
toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"

aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="home.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="menu.php">Menu</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="transaksi.php">Transaksi</a>
</li>
<a class="nav-link" aria-current="page"
href="logout.php">Logout</a>
</li>
</ul>
</div>
</div>
</nav>
<div class="container bg-light rounded" style="margin-top:10px">
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
		
		<td><a href="member.php?id=<?=$data_paket['id']?>"
		class="btn btn-success">Pilih</a>
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