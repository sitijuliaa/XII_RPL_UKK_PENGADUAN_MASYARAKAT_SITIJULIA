<?php

session_start();

$koneksi = mysqli_connect("localhost","root","","pengaduan_masyarakat");

$result = mysqli_query($koneksi, "SELECT * FROM pengaduan");

// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>masyarakat</title>
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
        <a class="nav-link text-dark" href="masyarakat.php">laporan pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="pengaduan.php">pengaduan</a>
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
                    <option value="id_pengaduan">id_pengaduan</option>
                    <option value="tgl_pengaduan">tgl_pengaduan</option>
                    <option value="username">username</option>
                    <option value="nik">nik</option>
                    <option value="isi_laporan">isi_lporan</option>
                    <option value="foto">foto</option>
                    <option value="status">status</option>
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
      <th scope="col">id_pengaduan</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['id_pengaduan'];?></td>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['nik'];?></td>
      <td><?=$row['isi_laporan'];?></td>
      <td><?=$row['foto'];?></td>
      <td><?=$row['status'];?></td>
      <td><a href="update.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
      <a href="delete.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-danger ml-auto">delete</a></td>
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