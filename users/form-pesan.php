<?php
    require "../config.php";
    if(isset($_GET['id'])){
        $cart = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM layanan WHERE id='$cart'"); 
        $result = mysqli_fetch_array($query);
        // $query0 = mysqli_query($db, "INSERT INTO keranjang_pesanan (id_pesanan) VALUES('$cart')");
    } else {
        $query = mysqli_query($db, "SELECT * FROM Layanan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/dark-mode.css">
    <link rel="stylesheet" href="../style/form-pesan-style.css">
    <script src="../javaScript.js"></script>
    <script src="../jquery.js"></script>
    <title>Keranjang Saya</title>
</head>
<body>
    <!-- <header>
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
    </header> -->
    
    <div class="main">
    <div class="main-checkout">
            <table>
                <tr>
                    <th class="co-pic"><img src="../upload/.<?=$result['gambar_layanan']?>" alt="<?=$row['gambar_layanan']?>" width="321px" height="200"><br></th>
                    <th>
                        <form class="main-checkout" method="POST" enctype="multipart/form-data">
                            <div class="input-detail-pesanan">
                                <br><h3>Buat Pesanan</h3>
                                
                                <label for="nama">Nama</label><br>
                                <input value='<?=$result['jenis_layanan']?>' readonly><br>
                                
                                <label for="harga">Harga</label><br>
                                <input value='<?=$result['harga']?>' readonly><br>
                                
                                <button><a href="https://api.whatsapp.com/send?phone=6283190933390&text= Halo, Saya Ingin Memesan Layanan Anda &#128075 <?php echo "%0a" ?> Pesanan: <?=$result['jenis_layanan']?> <?php echo "%0a" ?> Harga: <?=$result['harga']?> <?php echo "%0a" ?> Jumlah: <?php echo "%0a" ?> Request: ">Pesan</button></a>
                                
                                <!-- <input type="submit" name="checkout" class="submit" value="Checkout"><br><br> -->
                            </form>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th><p><?=$result['jenis_layanan']?></p></th> <br>
                </tr>
                <tr>
                    <th><p>Rp. <?=$result['harga']?></p></th>
                </tr>
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