<?php

session_start();

$nik = $_GET['nik'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $koneksi->query("DELETE FROM `masyarakat` WHERE `nik`= '$nik'");

if($query)
{
    header("location:masyarakat.php");
}