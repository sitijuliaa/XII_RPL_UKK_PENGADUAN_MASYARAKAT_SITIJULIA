<!DOCTYPE html>
<html lang="en">
<head>
    <title>registerF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:#2C73D2">
<body>
<div style="padding:100px;text-align:center;">
<form action="login.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-white fw-bold">P E N G A D U A M A S Y A R A K A T</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-4">
            <form class="card-body cardbody-color p-lg-4 text-white ">
        <br>
        <h2>REGISTER</h2>
        <div class="mb-3">
        <br>
            <label>NIK :</label><br>
            <input type="text" name="nik" placeholder="Isi NIK anda" >
        </div>
        <div class="mb-3">
            <label>Nama :</label><br>
            <input type="text" name="nama" placeholder="Isi Nama anda">
        </div>
        <div class="mb-3">
            <label>Username :</label><br>
            <input type="text" name="nama" placeholder="Isi usename anda">
        </div>
        <div class="mb-3">
            <label>Password:</label><br>
            <input type="text" name="nama" placeholder="Isi password anda">
        </div>
        <div class="mb-3">
            <label>No telp:</label><br>
            <input type="text" name="nama" placeholder="Isi no telp anda">
        </div>
        <div class="text-center mt-3"> 
        <br><button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Daftar</button><br>
        <p><i>Sudah Punya Akun? Click <a href="loginj.php" class="text-primry">Login</a></i></p>
</div>
        </form>
</body>
</html>
<?php
session_start();

if(isset($_SESSION['nama'])){
    header("location:login.php");
}
?>