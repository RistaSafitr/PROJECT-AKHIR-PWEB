<?php
require "../config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM layanan WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $jenis_layanan = $result['jenis_layanan'];
    $harga = $result['harga'];
    $nama_gambar = $result['nama_gambar'];
    $gambar = $result['gambar'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE layanan SET jenis_layanan='$_POST[jenis_layanan]',harga='$_POST[harga]',nama_gambar='$_POST[nama_gambar]',gambar='$_POST[gambar]', WHERE id=$_GET[id]");
    if($query){
        header("Location:layanan.php");
    } else {
        echo "Update gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT ONLINE SAMARINDA</title>
    <link rel="stylesheet" href="../style/admin-css2.css">
</head>
<body>
    <h1 class="judul">Sistem Print Online Samarinda</h1>
    <div class="form-class">
        <h3>Edit Data Pesanan</h3>
        <form action="layanan-tambah.php" method="POST" enctype="multipart/form-data">
            <label for="">Nama Service</label><br>
            <input type="text" name="jenis_layanan" id="jenis_layanan" required><br>

            <label for="">Harga</label><br>
            <input type="number" name="harga" id="harga" required><br>

            <label for="nama_gambar">Di simpan sebagai: </label><br>
            <input type="text" name="nama_gambar" required><br>

            <label for="gambar">Gambar</label><br>
            <input type="file" name="gambar">  <br><br>

            <input type="submit" name="tambah" value="tambah">
        </form>
    </div>

</body>
</html>