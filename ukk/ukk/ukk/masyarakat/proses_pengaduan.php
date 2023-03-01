<?php 

var_dump($_POST);
//variable
$tgl= $_POST['tgl_pengaduan'];
$isi = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = 'proses';
$nik = '1567';
$id_pengaduan = rand(1,100000);
//koneksi
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query("INSERT INTO `pengaduan`(`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES ('$id_pengaduan','$tgl','$nik','$isi','$foto','$status')");
   
   if($query){
    header("location:pengaduan.php");
}       