<?php
if($_POST){
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tlp= $_POST['tlp'];
$jenis_kelamin=$_POST['jenis_kelamin'];

if(empty($nama)){
echo "<script>alert('Nama member tidak bolehkosong');location.href='tambah_member.php';</script>";
} elseif(empty($alamat)){
echo "<script>alert('Alamat tidak bolehkosong');location.href='tambah_member.php';</script>";
} elseif(empty($tlp)){
echo "<script>alert('Nomor telpon tidak boleh kosong');location.href='tambah_member.php';</script>";
} elseif(empty($jenis_kelamin)) {
echo "<script>alert('Jenis Kelamin tidak boleh kososng');location.href='tambah_member.php';</script>";
} else
include "koneksi.php";
$insert=mysqli_query($conn,"insert into member (nama,alamat,jenis_kelamin,tlp) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')") or die(mysqli_error($conn));
if($insert){
echo "<script>alert('Sukses menambahkan member');location.href='tambah_member.php';</script>";
} else {
echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
}
}
?>