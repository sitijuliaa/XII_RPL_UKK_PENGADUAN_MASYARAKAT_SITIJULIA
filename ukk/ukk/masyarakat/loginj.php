<?php 

session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
   
//var_dump($query->rowCount());
   if($query->rowCount() > 0){
      session_start();
   
   $_SESSION["username"] = $_POST['username'];
   $_SESSION["password"] = $_POST['password'];
    header("location:home.php");
   }else{
    header("location:login.php");
   }