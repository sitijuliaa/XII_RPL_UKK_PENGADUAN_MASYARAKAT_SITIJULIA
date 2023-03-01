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
<body style="background:pink;">
    <div class="container mt-5">
    <h1 class="text-white">Pengaduan Masyarakat</h1>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="data_pengaduan.php">data pengaduan</a>
       </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</div>
<div class="container mt-3" style="width:500px;margin-left:0px">
            <div class="row">
                  </div>
                  <div class="col-auto">
                </div>
              </div> 
              </div>
          </from>
        </div>
      </div>
</div>
<div class="container">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-dark table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">id_pengaduan</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col" style="width:300px">isi_laporan</th>
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
      <td><img src="../masyarakat/img/<?=$row['foto']; ?>" width="100" style="border-radius: 15px;" /></td>
      <td><?=$row['status'];?></td>
      <td>
        <a href="tanggapan.php?id_tanggapan=<?= $row['id_pengaduan'];?>" class="btn btn-primary">Memberi tanggapan</a>
    </td>

    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end" style="margin-right:9%">

  </div>
</body>
</html>