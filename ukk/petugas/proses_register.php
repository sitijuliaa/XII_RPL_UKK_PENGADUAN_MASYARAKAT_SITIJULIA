<?php 
// include "koneksi.php";
$id = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$username =$_POST['username'];
$password =$_POST['password'];
$telp =$_POST['telp'];
$level =$_POST['level'];

// var_dump($_POST);
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query("INSERT INTO `petugas` VALUES ('$id','$nama','$username','$password','$telp','$level')");
 
    header('location:logins.php');
   
?>