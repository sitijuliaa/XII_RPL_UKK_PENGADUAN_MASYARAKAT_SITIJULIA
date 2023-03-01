<?php
session_start();

if(isset($_SESSION["nama"])){
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Peduli Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:gery">
    <div style="padding: 50px;">
        <form action="logind.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-white fw-bold">PENGADUAN</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">L O G I N</h2>
              <div class="mb-3 mt-3 text-center">
                USERNAME : <br>
                <input class="rounded-3 border-light" type="text" name="username" placeholder="masukan NIK anda" 
                style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center">
                PASSWORD : <br>
                <input class="rounded-3 border-light" type="password" name="password" placeholder="masukan Nama anda" 
                style="width: 300px;" required>
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Login</button> <br>
                <p><i>Belum Punya Akun? Click <a href="register.php" class="text-danger">Register</a></i></p>
                </div>
              </div>
              
            </form>
        </div>
</body>
</html