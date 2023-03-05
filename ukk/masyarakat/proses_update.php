<?php

session_start();

$id = $_GET['id_pengaduan'];
$tgl = $_POST['tgl_pengaduan'];
$islap = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $db->query("UPDATE `pengaduan` SET `tgl_pengaduan`='$tgl',`isi_laporan`='$islap',`foto`='$foto' 
WHERE `id_pengaduan`='$id'");

if($query){
    header ("location:pengaduan.php");
}