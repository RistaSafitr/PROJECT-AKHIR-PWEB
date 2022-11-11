<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/dark-mode.css">
    <script src="../javaScript.js"></script>
    <script src="../jquery.js"></script>
    <title>Keranjang Saya</title>
</head>
<body>
    <header>
        <h3>Print Online Samarinda</h3>
        <div class="header-nav">
            <ul>
                <li>
                    <div class="dark">
                        <label class="switch">
                            <input type="checkbox" id="toggle">
                            <span class="slider"></span>
                        </label>
                    </div>
                </li>
                <li><a href=""><img src="../logo/icons8-user-30.png" alt="Profile"></a></li>
                <li><a href=""><img src="../logo/icons8-cart-32.png" alt="Cart"></a></li>
                <li><a href=""><img src="../logo/icons8-home-page-50.png" alt="Home" width="40px" height="40px"></a></li>
            </ul>
        </div> 
    </header>

    <div class="main">
        <div class="tabel-checkout">
            <table>
                <tr>
                    <th colspan="8"><center><h3>Pesanan Saya</h3></center></th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Nama Pesanan</th>
                    <th>Request</th>
                    <th>Jumlah Pesanan</th>
                    <th>Total Harga</th>
                    <th>File</th>
                    <th>Waktu Pemesanan</th>
                    <th>Status Pesanan</th>
                </tr>

                <?php
                    require '../config.php';
                    $query = mysqli_query($db, "SELECT * FROM keranjang_pesanan INNER JOIN layanan ON keranjang_pesanan.id_pesanan = layanan.id_user INNER JOIN ");
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query)){

                    }
                ?>
            </table>
        </div>
    </div>

    <footer>
        <div class="copyright">
            <p><center>@Copyright 2022 - Project Akhir Kelompok 3 B1 20</center></p>
        </div>
    </footer>
</body>
</html>