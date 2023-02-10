<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1 class="text-white">L A P O R A N    P E N G A D U A N</h1>
    <h4 class="text-white">laporan pengaduan</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="masyarakat.php">laporan masyarakat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="tambah data.php">tambah data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</div> 
<div style="padding: 10px;">
        <form action="pengaduan.php"  method="POST">
        <div class="container mt-2">
        <div class="row" >
        <div class="col-md-8 offset-md-1" style="margin:auto">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">tambah data</h2>
            <div class="container mt-2">
            <div class="mb-3">
              <div>
              <div class="mb-3 text-center mt-3 ">
                id pengaduan : 
                <input class="rounded-3 form-control" type="text" name="id_pengaduan" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 ">
                tanggal pengaduan : 
                <input class="rounded-3 form-control" type="date" name="tgl_pengaduan" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 ">
                Nik : 
                <input class="rounded-3 form-control" type="text" name="nik" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 ">
                Isi laporan: 
                <input class="rounded-3 form-control" type="text" name="isi_laporan" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 ">
                Foto: 
                <input class="rounded-3 form-control" type="file" name="foto" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 ">
                Status: 
                <input class="rounded-3 form-control" type="text" name="status" style="width: 400px;margin:auto">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 100px;">Simpan</button> 
                </div>
              </div>
            </form>
        </div>
      </body>
      </html>