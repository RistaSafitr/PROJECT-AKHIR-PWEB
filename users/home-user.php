<?php
    session_start();
    require '../config.php';
    if($_SESSION['user_login'] != true){
        echo "Gagal Login";
    }

    $query = mysqli_query($db, "SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
    $user = $_SESSION['log_us'];
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
                <li><a href="../logout.php"><img src="../logo/logout.png" alt="logout" width="30px" height="30px"></a></li>
                <li><a href="akun.php"><img src="../logo/icons8-user-30.png" alt="Profile"></a></li>
                <li><a href="keranjang.php"><img src="../logo/icons8-cart-32.png" alt="Cart"></a></li>
                <li><a href=""><img src="../logo/icons8-home-page-50.png" alt="Home" width="40px" height="40px"></a></li>
            </ul>
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
                                <center><p><?=$row['jenis_layanan']?></p></center>
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

    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="titleText"> <span>A</span>bout Us</h2><br>
                <p>Print Online Samarinda hadir sebagai solusi untuk Anda. <br>
                            Print segala tugas anda hanya dengan satu jari. Kapan <br>
                            dan dimanapun Anda berada, website kami dapat di akses <br>
                            di segala situasi (kecuali jika akses internet anda tidak <br>
                            tersedia) <br><br>
                </p>
                <p>Ulasan Anda akan sangat membantu kami <br>
                        dalam mengembangkan kualitas website ini</p>
                <tr>
                    <td> <br><br>
                        <button><a href="rating-web.php?id_user=<?=$result['id_user']?>">Feedback</a></button>
                    </td>
                </tr>
            </div>
        </div>
    </section>

    <footer>
        <div class="copyright">
            <p><center>@Copyright 2022 - Project Akhir Kelompok 3 B1 20</center></p>
        </div>
    </footer>
</body>
</html>