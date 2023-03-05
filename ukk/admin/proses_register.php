<?php

session_start();
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];


$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("INSERT INTO `petugas`(`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES ('$nik','$nama','$username','$password','$telp','admin')");

if($query){
    header('location:home.php');
}
?>