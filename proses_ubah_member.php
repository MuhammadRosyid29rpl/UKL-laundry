<?php
if($_POST){
$id=$_POST['id'];   
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tlp=$_POST['tlp'];

if(empty($nama)){
echo "<script>alert('nama tidak boleh kosong');location.href='tampil_member.php';</script>";
} elseif(empty($alamat)){
echo "<script>alert('alamat tidak boleh kosong');location.href='tampil_member.php';</script>";
} elseif(empty($jenis_kelamin)){
echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='tampil_member.php';</script>";    
} elseif(empty($tlp)){
    echo "<script>alert('tlp tidak boleh kosong');location.href='tampil_member.php';</script>"; 
}    
include "koneksi.php";
$update=mysqli_query($conn,"update member set nama='".$nama."',alamat='".$alamat."',jenis_kelamin='".$jenis_kelamin."',tlp='".$tlp."' where id='".$id."'") or die(mysqli_error($conn));
if($update){
echo "<script>alert('Sukses update data member');location.href='tampil_member.php';</script>";
} else {
echo "<script>alert('Gagal update data member');location.href='tampil_member.php?id=".$id."';</script>";
}
} else {
$update=mysqli_query($conn,"update member set nama='".$nama."',alamat='".$alamat."',jenis_kelamin='".$jenis_kelamin."',tlp='".$tlp."' where id='".$id."'") or die(mysqli_error($conn));
if($update){
echo "<script>alert('Sukses update data member');location.href='tampil_member.php';</script>";
} else {
echo "<script>alert('Gagal update data member');location.href='tampil_member.php?id=".$id."';</script>";
}
}
?>