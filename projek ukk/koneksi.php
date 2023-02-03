<?php
$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat','root','');
$query = $koneksi->query("select * from register");

?>

<h1>pengaduan masyarakat</h1>
<?php while ($result = $query->fetch()) { ?>
    <p><?= $result['nik']; ?>
    <?php } ?>