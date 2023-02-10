<?php 

session_start();

$id = $_POST["id_pengaduan"];
$tgl = $_POST["tanggal_pengaduan"];
$nik = $_POST["nik"];
$isi = $_POST["isi_laporan"];
$foto = $_POST["foto"];
$status = $_POST["status"];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query("SELECT * FROM petugas WHERE id_pengaduan='$id' AND tgl='$tanggal_pengaduan'");
   
if($query){
    header ("location:masyarakat.php");
    }