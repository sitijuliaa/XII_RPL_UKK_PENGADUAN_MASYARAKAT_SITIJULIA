<?php

session_start();
if(isset($_SESSION['username'])){
  if($_SESSION['level'] == "admin"){
    header("location:admin/home.php");
  }elseif($_SESSION['level'] == "petugas"){
    header("location:petugas/home.php");
  }else{
    header("location:masyarakat/pengaduan.php");
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>log</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    ="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
</head>
<body style="background:gery">
    <div style="padding: 50px;">
        <form action="loginf.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-white fw-bold">PENGADUAN</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-2 mt-4 text-center" style="color:rgb(61, 61, 61);">L O G I N</h2>
            <hr class="divider">
            <div class=""  style="padding:20px;">
              <div class="mb-3 mt-2 text-start fw-bold">
                username :
                <input class="form-control rounded-3 text-center" type="text" name="username"
                 placeholder="masukan username anda" style="width:100%;" required>
              </div>
              <div class="mb-3 mt-3 text-start fw-bold">
                password : <br>
                <input class="form-control rounded-3 text-center" type="password" name="password" 
                placeholder="masukan password anda" requtred style="width: 100%;" required>
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn px-3 mb-3 fw-bold" style="width: 200px;background:#8DB596">Login</button> <br>
                <p><i>Belum Punya Akun? Click <a href="register.php" class="text-danger">Register</a></i></p>
                </div>
              </div>
              </div>
            </form>
        </div>
</body>
</html>