<?php

session_start();

// if(isset($_SESSION['nama'])){
// header("location:user.php");
// }

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .box{
            height: 262px;
            width: 1110; 
        }
    </style>
</head>
<body style="background:grey">
    <div class="container mt-5">
    <h1 class="text-black">PELAPORAN PENGADUAN MASYARAKAT</h1>
    <h4 class="text-black">catatan pengaduan masyarakat</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="catatan.php">pengaduan masyarakat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="Isi_Data.php">Isi Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</div>
<div class="container mt-3 text-center">
    <div class="box border border-light bg-white">
        <h4 class="mt-5">Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat</h4>
    </div>
</div>
<div class="text-end mt-3">
<a href="catatan.php">
  <button class="btn btn-primary">Pengaduan Masyarakat</button>
</a>
</div>
</body>
</html>