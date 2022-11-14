<?php
    session_start();
    require '../config.php';
    if($_SESSION['user_login'] != true){
        echo '<script>window.location="akun.php"</script>';
    }

    $query = mysqli_query($db, "SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
    $user = $_SESSION['log_us'];

    if(isset($_POST['rate'])){
        $id_user = $user['id'];
        $username = $user["username"];
        $rate = $_POST['rating'];
        $ulasan = $_POST['ulasan'];
        $query0 = mysqli_query($db,"INSERT INTO rating (id_user, username, rate, komentar) VALUES ('$id_user','$username', '$rate', '$ulasan')");
        if($query0){
            echo "<script>
                alert('Terima Kasih Atas Penilaian Anda : '$username');
            </script>";
            header("Location:home-user.php");
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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/dark-mode.css">
    <link rel="stylesheet" href="../style/rating-web.css">
    <script src="../javaScript.js"></script>
    <script src="../jquery.js"></script>
    <title>Rate Layanan</title>
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
        <div class="main-rating">
            <center><h3>Rating Pesanan</h3></center> <br><br>
            <form method="POST" enctype="multipart/form-data">

                    <label for="username">Username </label>
                    <input value='<?php echo $user["username"] ?>' readonly>

                    <label for="rating">Rating Layanan </label>
                    <input type="number" name="rating" required>

                    <label for="ulasan">Ulasan Pengguna </label>
                    <textarea name="ulasan" cols="100" rows="10"></textarea><br>

                    <input type="submit" name="rate" class="submit" value="Rate"><br><br>
                </form>
        </div>
    </div>

    <footer>
        <div class="copyright">
            <p><center>@Copyright 2022 - Project Akhir Kelompok 3 B1 20</center></p>
        </div>
    </footer>
</body>
</html>