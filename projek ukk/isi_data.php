<?php

session_start();

if(!isset($_SESSION['nama'])){
  header("location:masyarakat.php");
  }
?>
<!DOCTYPE html> 
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="sylesheer">
    <link rel="sylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="sty.css">
</head>
<body style="background:#gray">
<div class="container mt-5">
    
    <div class="card my-6">
        <div class="card-body text-center">
            <form action="insert.php" method="post">
             <div class="row">
            <a type="submit" href="masyarakat.php" class="btn-close mb-3 " aria-label="Close" style="float:left"></a>
                    <h1>Masukan Catatan Pengaduan</h1>
                <div class="mb-3">
                    <span>id_pengasuan</span>
                    <input type="text" name="id_pengaduan" class="form-control" style="width:200px;margin:auto">
                </div>
                <div class="mb-3">
                    <span>tanggal_pengaduan</span>
                    <input type="date" name="tanggal_pengaduan" class="form-control" style="width:200px;margin:auto">
                </div>
                <div class="mb-3">
                    <span>nik</span>
                    <input type="text" name="nik" class="form-control" style="width:200px;margin:auto">
                </div>
                <div class="mb-3">
                    <span>isi_laporan</span>
                    <input type="text" name="isi_laporan" class="form-control" style="width:200px;margin:auto">
                </div>
                <div class="mb-3">
                    <span>foto</span>
                    <input type="text" name="foto" class="form-control" style="width:200px;margin:auto">
                </div>
                <div class="mb-3">
                    <span>status</span>
                    <input type="file" name="status" class="form-control" style="width:200px;margin:auto">
                </div>
                <div class="mb-3">
                    <button type="text" class="btn btn-primary" style="width:150px">add</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html