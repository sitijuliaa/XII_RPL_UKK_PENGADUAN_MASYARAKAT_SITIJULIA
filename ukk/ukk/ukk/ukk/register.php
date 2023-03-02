
<!DOCTYPE html>
<html lang="en">
<head>
    <title>register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
</head>
<body >
<body>
<div style="padding:100px;text-align:center;">
<form action="proses_register.php"  method="POST">
<div class="text-center fs-1"><h1 class="text-white" 
style="font-family: 'Alfa Slab One', cursive;">PENGADUAN MASYARAKAT</h1></div>
<div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-5"  style="background-color:white">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">D A F T A R</h2>
              <div class="mb-3 mt-3 text-center ">
                nik : <br>
                <input class="rounded-3 border-light" type="text" name="nik"
                 placeholder="masukan NIK anda" style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                nama : <br>
                <input class="rounded-3 border-light" type="text" name="nama" 
                placeholder="masukan nama anda" required style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                username : <br>
                <input class="rounded-3 border-light" type="text" name="username"
                 placeholder="masukan  username anda" style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                password : <br>
                <input class="rounded-3 border-light" type="text" name="password" 
                placeholder="masukan password anda" required style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                telp: <br>
                <input class="rounded-3 border-light" type="text" name="telp" 
                placeholder="masukan telp anda" required style="width: 300px;">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn px-3 mb-3 " style="width: 200px;background:#B4CDE6">Daftar</button> <br>
                </div>
        </form>
</body>
</html>