<?php


session_start();
$db = mysqli_connect("localhost","root","","pengaduan_masyarakat");
$result = mysqli_query($db, "SELECT * FROM pengaduan");
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>

    <title>masyrakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey;">
    <div class="container mt-5">
    <h1 class="text-black">Masyarakat</h1>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="pengaduan.php">lihat pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_pengaduan.php">isi laporan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="keluar.php">logout</a>
      </li>
    </ul>
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
      <td><img src="./../masyarakat/img/<?=$row['foto']; ?>" width="100" style="border-radius: 15px;" /></td>
      <td><?=$row['status'];?>
    </td>

      <td>
        <a href="update.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
        <a href="delete.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-danger ml-auto">delete</a>
        <a href="detail.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-danger ml-auto">detail</a>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
</body>
</html>