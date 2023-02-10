<?php

session_start();

$id_pengaduan = $_POST['id_pengaduan'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = $_POST['status'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $koneksi->query("INSERT INTO `tambah data`VALUES ('','$id_pengaduan','$tgl_pengaduan','$nik','$isi_laporan','$foto','$status')");
 
if($query){
header ("location:masyarakat.php");
}