<?php

$id = $_GET['id_pengaduan'];
$tanggal = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto']; 
$status = $_POST['status'];
$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("UPDATE `pengaduan` SET `tgl_pengaduan`='$tanggal',`isi_laporan`='$isi_laporan',`foto`='$foto',`status`='$status' WHERE `id_pengaduan`='$id'");

if($query){ 
    header("Location:pengaduan.php");
}