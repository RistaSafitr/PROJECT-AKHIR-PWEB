<?php
    session_start();
    require '../config.php';
    if($_SESSION['user_login'] != true){
        echo '<script>window.location="akun.php"</script>';
    }

    $query = mysqli_query($db, "SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
    $user = $_SESSION['log_us'];
?>
    <!-- // session_start();
    // require "../config.php";
    
    // $id = $_GET['id'];

    // if(isset($_GET['id'])){
    //     $query = mysqli_query($db,"SELECT * FROM user WHERE id = $id");
    //     $result = mysqli_fetch_assoc($query);
    //     // $nama = $_POST['nama'];
    //     // $email = $_POST['email'];
    //     // $username = $_POST['username'];
    //     // $password = $_POST['password'];
    //     // // $konfirmasi = $result['konfirmasi'];
    //     // $notelp = $_POST['no_telp'];
    //     // // $gender =  $_POST['gender'];
    //     // $profilepicture =$_POST['profile_picture'];
    // }
    
    // $user = $_SESSION['log_us']; -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/login-style.css">    
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
                <li><a href="home-user.php"><img src="../logo/icons8-home-page-50.png" alt="Home" width="40px" height="40px"></a></li>
            </ul>
        </div> 
    </header>
<div class="main">
        <div class="tabel">
            <table>
                <tr>
                    <th colspan="2"><center><h2>UPDATE</h2></center></th>
                </tr>
                <tr>
                    <!-- <th class="login-pic"><img src="images/business-3d-happy-robot-assistant-waving-hello.png" alt="Hello"></th> -->
                    <th>
    <div class="container regis">
        <h1 class="judul">Data Akun</h1>
    
        <div class="form">
            <form action="" method="post">
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" class="input" placeholder="Masukkan nama" value="<?php echo $user["nama"]?>"><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" class="input" placeholder="Masukkan email" value="<?php echo $user["email"]?>"><br>

                <label for="username">Username</label><br>
                <input type="text" name="username" class="input" placeholder="Masukkan username"value="<?php echo $user["username"]?>"><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" class="input" placeholder="Password"value='<?=$password?>'><br>

                <label for="konfirmasi">Konfirmasi Password</label><br>
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password"><br>

                <label for="no_telp"><strong>Nomor Telepon </strong> </label> <br>
                <input type="tel" name="no_telp" placeholder="Masukkan no telp" pattern="[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}" value="<?php echo $user["no_telp"]?>"> <br>
                
                <!-- <p><strong>Gender :</strong> </p>
                <label for="gender">Laki-laki</label>
                <input type="radio" name="gender" value="Laki-laki" value='<?=$gender?>'/><br>
                <label for="gender">Perempuan</label>
                <input type="radio" name="gender" value="Perempuan" value='<?=$gender?>'/> <br><br> -->

                <label for="nama_gambar">Nama File</label><br>
                <input type="text" name="nama_gambar" class="form-text">
                <label for="profile_picture">Foto Profil</label>
                <input type="file" name="profile_picture" class="form-text" value='<?=$profilepicture?>'><br>

                <input type="submit" name="submit" class="submit" value="Update"><br><br>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    // $konfirmasi = $result['konfirmasi'];
                    $notelp = $_POST['no_telp'];
                    // $gender =  $_POST['gender'];
                    $profilepicture =$_POST['profile_picture'];

                    // $query = mysqli_query($db,"UPDATE user SET username='$_POST[username]',nama='$_POST[nama]',password='$_POST[password]',email='$_POST[email]',notelp='$_POST[no_telp]',profile_picture='$_POST[profile_picture]', WHERE id = '".$_SESSION['id']."'");
                    // $query = mysqli_query($db,"UPDATE user SET username='$_POST[username]',nama='$_POST[nama]',password='$_POST[password]',email='$_POST[email]',notelp='$_POST[no_telp]',profile_picture='$_POST[profile_picture]', WHERE id = '".$_SESSION['id']."'");
                    // $query = mysqli_query($db, "UPDATE user SET nama = '" . $nama . "' WHERE id = '".$user["id"]."' ");
                    // $query = mysqli_query($db, "UPDATE user SET nama = '" . $nama . "' WHERE id = '".$user["id"]."' ");
                    $query = mysqli_query($db, "UPDATE user SET nama ='$_POST[nama]' WHERE id=$_GET[id]");
                    if($query){
                        echo "<script>
                        alert('Update Berhasil');
                    </script>";
                        header("Location:akun.php");
                    } else {
                        echo "<script>
                        alert('Update Gagalllll');
                    </script>";
                    }
                }
?>
    </div>

</body>
</html>