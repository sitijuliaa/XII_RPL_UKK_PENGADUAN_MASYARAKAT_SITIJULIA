<?php


session_start();

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp')");

if($query){
    header('location:login.php');
}