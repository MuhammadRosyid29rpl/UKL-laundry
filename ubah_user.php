<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
<title></title>
</head>
<body>
<?php
include "koneksi.php";
$qry_get_member=mysqli_query($conn,"select * from user where id = '".$_GET['id']."'");
$dt_user=mysqli_fetch_array($qry_get_member);
?>
<h3>Ubah Data User</h3>
<form action="proses_ubah_user.php" method="post">
<input type="hidden" name="id" value="<?=$dt_user['id']?>">
Nama :
<input type="text" name="nama" value="<?=$dt_user['nama']?>" class="form-control">
Username :
<input type="text" name="username"value="<?=$dt_user['username']?>" class="form-control">
Pasword :
<input type="password" name="password"value="<?=$dt_user['password']?>" class="form-control">
Role :
<br>
<input type="radio" name="role" value="admin" checked> Admin<br>
<input type="radio" name="role" value="kasir"> Kasir<br>
</div>
<input type="submit" name="simpan" value="Ubah data user"class="btn btn-primary">
<?php
include "koneksi.php";
$qry_member=mysqli_query($conn,"select * from user");
while($data_user=mysqli_fetch_array($qry_member)){
if($data_user['id']==$dt_user['id']){
$selek="selected";
} else {
$selek="";
}

echo '<option value="'.$data_user['id'].'"'.$selek.'>'.$data_user['nama'].'</option>';

}
?>
</select>
</form>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
</body>
</html>