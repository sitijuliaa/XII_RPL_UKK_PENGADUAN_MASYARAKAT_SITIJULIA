<?php

session_start();

$idpeng = $_GET['id_tanggapan'];
$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("SELECT * FROM `pengaduan` WHERE id_tanggapan='$idpeng'");
$data = $query->fetchAll();
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
    <h1 class="text-white">Pengaduan Masyarakat</h1>
    <h4 class="text-white">Laporan Pengaduan</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="data_pengaduan.php">data_pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</div>
<div class="container">
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    
  </thead>
  <?php $i=1;?>
  <?php foreach ($query as $query) :?>
  <tbody>
    <tr class="text-center">
      <th scope="query"><?= $i ?></th>
      <td><?=$query['id_pengaduan'];?></td>
      <td><?=$query['tgl_pengaduan'];?></td>
      <td><?=$query['nik'];?></td>
      <td><?=$query['isi_laporan'];?></td>
      <td><img src="../masyarakat/img<?=$query['foto']; ?>" width="100" height="100" style="border-radius: 10px;" /></td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endforeach ?>
    </table>
    <h1>Tanggapan</h1>
    <div class ="">
    <div class="col">
    <form action="tanggapan.php" method="POST">
            <hr class="divider">
            <div class="container">
                
            <div class="row">
                <div class="col mt-3">
                <?php
                    echo $_SESSION ["username"];
                    ?>
                    <div class="mb-3">
                        Tanggal : <input type="date" name="tgl_pengaduan" class="form-control" >
                    </div>
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
                </div>
                <div class="mb-3 mt-3 text-end" >
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="admin.php" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            <div>
            </div>
            </div>
        </div>
        </div>
    </form>
</div>
</div>
</body>
</html>