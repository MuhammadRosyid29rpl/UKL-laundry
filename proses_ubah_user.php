<?php
if($_POST){
$id=$_POST['id'];   
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

if(empty($nama)){
echo "<script>alert('nama tidak boleh kosong');location.href='tampil_user.php';</script>";
} elseif(empty($username)){
echo "<script>alert('username tidak boleh kosong');location.href='tampil_user.php';</script>";
} elseif(empty($password)){
echo "<script>alert('password tidak boleh kosong');location.href='tampil_user.php';</script>";    
} elseif(empty($role)){
    echo "<script>alert('role tidak boleh kosong');location.href='tampil_user.php';</script>"; 
}    
include "koneksi.php";
$update=mysqli_query($conn,"update user set nama='".$nama."',username='".$username."',password='".$password."',role='".$role."' where id='".$id."'") or die(mysqli_error($conn));
if($update){
echo "<script>alert('Sukses update data user');location.href='tampil_user.php';</script>";
} else {
echo "<script>alert('Gagal update data user');location.href='tampil_user.php?id=".$id."';</script>";
}
} else {
$update=mysqli_query($conn,"update user set nama='".$nama."',username='".$username."',password='".$password."',role='".$role."' where id='".$id."'") or die(mysqli_error($conn));
if($update){
echo "<script>alert('Sukses update data user');location.href='tampil_user.php';</script>";
} else {
echo "<script>alert('Gagal update data user');location.href='tampil_user.php?id=".$id."';</script>";
}
}
?>