<?php

session_start();

$idpeng = $_GET['id_pengaduan'];
$tgl = $_POST['tgl_pengaduan'];
$tggpn = $_POST['tanggapan'];
$idpet = $_SESSION['id_petugas'];
$status = $_POST['status'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");

$query = $db->query("INSERT INTO `tanggapan`(`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) 
VALUES (null,'$idpeng','$tgl','$tggpn','$idpet')");
$status = $db->query("UPDATE `pengaduan` SET `status`= '$status' WHERE id_pengaduan = '$idpeng'");

if($status){
header ("location:tang.php");
}