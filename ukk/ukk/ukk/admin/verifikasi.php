<?php

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
// die('sukses');
if(!isset($_GET['id'])){
    header("location:tanggapan.php");
}
$status = $_POST['status'];
$id = $_GET['id'];
$sql = "UPDATE pengaduan set status = '$status' where id_pengaduan='$id'";
$query = $koneksi->query($sql);
if($query){
    header("location:tanggapan.php");
}