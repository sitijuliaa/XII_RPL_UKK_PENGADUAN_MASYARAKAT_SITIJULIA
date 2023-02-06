<?php 
include "koneksi.php";
$lvl = $_POST['level'];
$nama = $_POST['nama_petugas'];
$username =$_POST['username'];
$password =$_POST['password'];
$telp =$_POST['telp'];

// var_dump($_POST);
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query("INSERT INTO `petugas` VALUES ('$nama','$username','$password','$telp', '$lvl')");

$data = $data = $query->fetch();
//var_dump($query->rowCount());
if($query->rowCount() > 0){
    session_start();
 
 $_SESSION["username"] = $_POST['username'];
 $_SESSION["password"] = $_POST['password'];
 $_SESSION["level"] = $_POST['level'];
}else
header("location:home.php");
?>