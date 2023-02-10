<?php

session_start();

$id= $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telepon'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $db->query("UPDATE `petugas` SET `id_petugas`='$id',`nama_petugas`='$nama',
`username`='$username',`password`='$password' WHERE `telepon`=`$telp` '");
 
if($query){
header ("location:masyarakat.php");
}