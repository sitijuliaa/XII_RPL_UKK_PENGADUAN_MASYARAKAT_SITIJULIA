<?php


session_start();

session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>pelaporan pengaduan masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="text-center mt-5">
    <h1> Anda Sudah Logout</h1>
    <button class="btn btn-danger"><a href="login.php" class="text=white">kembali</a></button>
</div>
</body>
</html>