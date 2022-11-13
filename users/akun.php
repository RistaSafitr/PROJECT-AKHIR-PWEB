<?php
    session_start();
    require '../config.php';
    if($_SESSION['user_login'] != true){
        echo '<script>window.location="akun.php"</script>';
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
    <title>Print Online Samarinda</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/dark-mode.css">
    <link rel="stylesheet" href="../style/login-style.css">
    <script src="../javaScript.js"></script>
    <script src="../jquery.js"></script>
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
                    <!-- <th colspan="2"><center><h2>Login Using Username and Password</h2></center></th> -->
                </tr>
                <tr>
                    <!-- <th class="login-pic"><img src="../images/business-3d-happy-robot-assistant-waving-hello.png" alt="Hello"></th> -->
                    <th>
<!-- <h1 class="judul">Profil</h1>
    <div class="list-table center" style="overflow-x: auto;">
        <table> -->
            <thead>
                <tr>
                    <th colspan="6" class="thead">
                        <h3 class="center">PROFIL</h3>
                    </th>

                </tr>
                <tr>
                    <!-- <th>No</th> -->
                    <th nowrap>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No Telpon</th>
                    <th>gender</th>
                    <th>profile picture</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php
                // require "config.php";
                // $id = $_GET["id"];
                // $query = mysqli_query($db, "SELECT FROM user WHERE id = $id"); //099
                // $i = $id;
                // while ($row = mysqli_fetch_assoc($query)) {
                    
                ?> -->
                    <tr>
                        
                        <td nowrap><?php echo $user['nama']?></td>
                        <td><?php echo $user["username"] ?></td>
                        <td><?php echo $user["email"]?></td>
                        <td><?php echo $user["no_telp"]?></td>
                        <td><?php echo $user["gender"]?></td>
                        <td><?php echo $user["profile_picture"]?></td>
                        <td class="edit">
                            <a href="akun-edit.php?id=<?=$user['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </td>
                        <td class="hapus">
                            <a href="akun-hapus.php?id=<?=$user['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php
                    // $i++;
                // }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>



<!-- <?php

?> -->