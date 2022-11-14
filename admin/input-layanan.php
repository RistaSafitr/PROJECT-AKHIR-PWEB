<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/dark-mode.css">
    <link rel="stylesheet" href="../style/input.css">
    <link rel="stylesheet" href="../style/admin-css2.css">
    <script src="../javaScript.js"></script>
    <script src="../jquery.js"></script>
    <title>Input Layanan</title>
</head>
<body>
    <h1 class="judul">Sistem Print Online Samarinda</h1>
    <div class="form-class">
    <h3>Tambah Pemesanan</h3>
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

    <!-- <div class="form-class">
        <form action="layanan-tambah.php" method="POST" enctype="multipart/form-data">
            <label for="">Nama Service</label>
            <input type="text" name="jenis_layanan" id="jenis_layanan" required>

            <label for="">Harga</label>
            <input type="number" name="harga" id="harga" required>

            <label for="nama_gambar">Di simpan sebagai: </label>
            <input type="text" name="nama_gambar" required>

            <label for="gambar">Gambar</label>
            <input type="file" name="gambar">  <br><br>

            <input type="submit" name="tambah" value="tambah">
        </form>
    </div> -->
</body>
</html>