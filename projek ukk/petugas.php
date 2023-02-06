<?php

session_start();

$koneksi = mysqli_connect("localhost","root","","pengaduan_masyarakat");

$result = mysqli_query($koneksi, "SELECT * FROM petugas");

// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey;">
    <div class="container mt-5">
    <h1 class="text-white">Pengaduan Masyarakat</h1>
    <h4 class="text-white">Laporan Pengaduan</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="petugas.php">laporan petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="masyarakat.php">masyarakat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</div>
<div class="container mt-3" style="width:500px;margin-left:0px">
<div class="card">
        <div class="row fw-bold card-body">
          <form>
            <div class="row">
                <div class="col-auto">
                <span class="text-black fs-5">Urutkan Berdasarkan : </span>
             </div>
             <div class="col-auto">
                  <select name="caper" class="form-control" style="width:100px" nik="">
                    <option value="id_petugas">id</option>
                    <option value="nama_petugas">nama_petugas</option>
                    <option value="lokasi">username</option>
                    <option value="password">password</option>
                    <option value="telp">telp</option>
                    <option value="level">level</option>
                  </select>
                  </div>
                  <div class="col-auto">
                  <button class="btn btn-primary">Urutkan</button>
                </div>
              </div>
              </div>
          </from>
        </div>
      </div>
</div>
<div class="container">
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">id_petugas</th>
      <th scope="col">nama_petugas</th>
      <th scope="col">username</th>
      <th scope="col">pssword</th>
      <th scope="col">telp</th>
      <th scope="col">level</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['id_petugas'];?></td>
      <td><?=$row['nama_petugas'];?></td>
      <td><?=$row['username'];?></td>
      <td><?=$row['password'];?></td>
      <td><?=$row['telp'];?></td>
      <td><?=$row['level'];?></td>
      <td><a href="update.php?id_petugas=<?=$row['id_petugas'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
      <a href="delete.php?id_petugas=<?=$row['id_petugas'];?>" class="btn btn-sm btn-danger ml-auto">delete</a></td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
        <a href="isi_data.php" class="btn btn-dark">Isi Catatan Perjalanan</a>
  </div>
</body>
</html>