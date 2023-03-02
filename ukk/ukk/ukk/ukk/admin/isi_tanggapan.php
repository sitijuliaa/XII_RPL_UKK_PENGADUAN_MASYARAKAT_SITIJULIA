<?php
    $id = $_GET['id_petugas'];
?>

<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>
    <title>isi tanggapan</title>
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
    <h1 class="text-white">BERI TANGGAPAN</h1>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_tanggapan.php">kembali</a>
      </li>
    </ul>
  </div>
</div> 
<div style="padding: 10px;">
        <div class="container mt-2">
        <div class="row" >
        <div class="col-md-8 offset-md-1" style="margin:auto">
        <div class="card my-6">
           
            <h1 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">isi tanggapan</h1>
            <div class="container mt-2">
            <div class="mb-3">
        <div class ="">
    </div>
    <div class="col">
    </div>
    <form action="proses_tanggapan.php?id_pengaduan=<?= $id ?>" method="POST">
            <hr class="divider">
            <div class="container">
            </div>

            <div class="row">
            </div>
                <div class="col mt-3">
              </div>
                    <div class="mb-3">
                        Tanggal : <input type="date" name="tgl_pengaduan" class="form-control" >
                    </div>
                <div class="mb-3 mt-3">
                        Tanggapan : <textarea type="text" name="tanggapan" class="form-control"></textarea>
                </div>
                <div class="col">
                    <div class="mb-3">
                        Status : 
                        <select name="status">
                            <option class="selected" value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>

                </div>
                <div class="mb-3 mt-3 text-end" >
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="home.php" class="btn btn-danger">Kembali</a>
            </div>
    </form>
        </div>
      </body>
      </html>