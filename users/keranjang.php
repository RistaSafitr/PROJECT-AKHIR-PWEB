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
    <link rel="stylesheet" href="../style/home-user.css">
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
                <li><a href="akun.php"><img src="../logo/icons8-user-30.png" alt="Profile"></a></li>
                <li><a href=""><img src="../logo/icons8-cart-32.png" alt="Cart"></a></li>
                <li><a href=""><img src="../logo/icons8-cart-32.png" alt="Cart"></a></li>
                <li><a href=""><img src="../logo/icons8-home-page-50.png" alt="Home" width="40px" height="40px"></a></li>
            </ul>
        </div> 
    </header>

    <div class="main">

    </div>

    <footer>
        <div class="copyright">
            <p><center>@Copyright 2022 - Project Akhir Kelompok 3 B1 20</center></p>
        </div>
    </footer>
</body>
</html>