<?php
    session_start();
    require '../config.php';
    if($_SESSION['user_login'] != true){
        echo "Gagal Login";
    }

    $query = mysqli_query($db, "SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
    $user = $_SESSION['log_us'];


if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $read_select_sql = "SELECT * FROM layanan WHERE jenis_layanan LIKE '%$keyword%'";
    $result = mysqli_query($db, $read_select_sql);
} else {
    $read_sql = "SELECT * FROM produk";
    $result = mysqli_query($db, $read_sql);
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
    <title>Print Online Samarinda</title>
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
                <li><a href="../logout.php"><img src="../logo/logout.png" alt="Logout" width="30px" height="30px"></a></li>
                <li><a href="akun.php"><img src="../logo/icons8-user-30.png" alt="Profile"></a></li>
                <li><a href="keranjang.php"><img src="../logo/icons8-cart-32.png" alt="Cart"></a></li>
                <li><a href="home-user.php"><img src="../logo/icons8-home-page-50.png" alt="Home" width="40px" height="40px"></a></li>
            <form action="" method="post">
                <input class="search" type="text" name="keyword" autofocus autocomplete="off">
                <button class="button" type="submit" name="cari"><i class="fas fa-search"></i>
                <button class="button" type="submit" href="produk.php"><i class="fas fa-arrow-left"></i>        
            </form>

                
            </ul>
        </div> 
            <div class="cri">
        <!-- <td>
            <form action="" method="post">
                <input class="search" type="text" name="keyword" autofocus autocomplete="off">
                <button class="button" type="submit" name="cari"><i class="fas fa-search"></i>
                <button class="button" type="submit" href="produk.php"><i class="fas fa-arrow-left"></i>        
            </form> -->
        </td>
        </div>
    </header>

    
    <div class="main">
        
        <div class="layanan">
            <?php
                require "../config.php";
                $query = mysqli_query($db, "SELECT * FROM layanan");
                $i = 1;
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <ul>
                        <div class="box-layanan">
                            <div class="services">
                                <img src="../upload/.<?=$row['gambar_layanan']?>" alt="<?=$row['gambar_layanan']?>" width="321px" height="200"><br><br>
                                <center><p><?=$row['jenis_layanan']?></p></center><br>
                                <center><p>Rp. <?=$row['harga']?></p> <br></center>
                                <div class="tambah-keranjang">
                                    <center><a href="tambah-keranjang.php?id=<?=$row['id']?>"><button><img src="../logo/icons8-cart-32.png" alt="cart"></button></a></center>
                                </div>
                            </div>
                            
                        </div>
                    </ul>
                <?php
                    $i++;
                    } 
                ?>
        </div>
    </div>

    <div class="quest">
        <h3>About Us</h3> <br>
        <p>Print Online Samarinda hadir sebagai solusi untuk Anda.
            Kapan dan dimanapun Anda berada,
        </p>
        <button><a href="rating-web.php?id_user=<?=$result['id_user']?>">Feedback</a></button>
    </div>

    <footer>
        <div class="copyright">
            <p><center>@Copyright 2022 - Project Akhir Kelompok 3 B1 20</center></p>
        </div>
    </footer>
</body>
</html>