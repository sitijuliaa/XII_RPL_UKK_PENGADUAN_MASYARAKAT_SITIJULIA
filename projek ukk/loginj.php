<?php 

session_start();

$nik = $_POST["nik"];
$nama = $_POST["nama"];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query("SELECT * FROM masyarakat WHERE nik='$nik' AND nama='$nama'");
   if($query->rowCount() > 0){
    $_SESSION["nama"] = $_POST['nama'];
    $_SESSION["nik"] = $_POST['nik'];
    header("location:home.php");
   }else{
    header("location:login.php");
   }