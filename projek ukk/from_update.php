<?php

$idcp = $_GET['idcp'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $db->query("SELECT * FROM `masyarakat` WHERE `nik`='$nik'");

$data = $query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pengaduan masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
<body style="background:purple">
<div class="container mt-5">
    <h1>P E N G A D U A N M A S Y A R A K A T</h1>
    <h2>pengaduan masyarakat</h2>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="catatan.php">Catatan Perjalanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_data.php">Isi Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark btn btn-danger" href="logout.php">keluar</a>
      </li>
    </ul>
  </div>
</div>
    <div style="padding: 50px;">
        <form action="update.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-white fw-bold">P E D U L I D I R I</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">U P D A T E</h2>
            <input type="hidden" name="idcp" value="<?= $idcp ?>">
              <div class="mb-3 mt-3 text-center">
                nik : <br>
                <input class="rounded-3 border-light" type="date" name="tanggal" style="width: 300px;" value="<?= $data['tanggal']?>">
              </div>
              <div class="mb-3 mt-3 text-center">
                nama : <br>
                <input class="rounded-3 border-light" type="time" name="waktu"  style="width: 300px;" value="<?= $data['waktu']?>">
              </div>
              <div class="mb-3 mt-3 text-center">
                username : <br>
                <input class="rounded-3 border-light" type="text" name="lokasi" style="width: 300px;" >
              </div>
              <div class="mb-3 mt-3 text-center">
                password : <br>
                <input class="rounded-3 border-light" type="text" name="suhu_tubuh" style="width: 300px;" >
              </div>
              <div class="mb-3 mt-3 text-center">
                telp : <br>
                <input class="rounded-3 border-light" type="text" name="suhu_tubuh" style="width: 300px;" >
              </div>
               <br><input type="submit" value="update" style="width:300px;margin:auto" class="btn btn-success"><br>
                </div>
            </form>
        </div>
</body>
</html>