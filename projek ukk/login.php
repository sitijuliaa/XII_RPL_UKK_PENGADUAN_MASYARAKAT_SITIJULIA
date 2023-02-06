<?php

session_start();

if(isset($_SESSION['username'])){
  header("location:home.php");
  }

?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
        <title>pengaduan masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
<body style="background:white">
    <div style="padding: 50px;">
        <form action="loginj.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-black fw-bold">P E L A P O R A N P E N G D U A N M A S Y A R A K A T</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">L O G I N</h2>
              <div class="mb-3 mt-3 text-center">
                USERNAME : <br>
                <input class="rounded-3 border-light" type="text" name="username" placeholder="masukan username anda" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                PASSWORD : <br>
                <input class="rounded-3 border-light" type="password" name="password" placeholder="masukan password anda" 
                style="width: 300px;">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Login</button> <br>
                <p><i>Belum Punya Akun? Click <a href="from_register.php" class="text-danger">Register</a></i></p>
                </div>
              </div>
              
            </form>
        </div>
</body>
</html>
