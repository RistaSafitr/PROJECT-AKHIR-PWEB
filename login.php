<?php
    session_start();
    require "config.php";
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        if($user == "admin" && $password == "admin"){
            $SESSION['login'] = true;
            echo "<script>
                alert('Selamat datang $username');
                document.location.href='admin/home-admin.php';
                </script>";
                $_SESSION['user_login'] = true;
                $_SESSION['log_us'] = $result;
                $_SESSION['id'] = $result->admin;
        } else {
            $query = mysqli_query($db,"SELECT * FROM user WHERE username='$user' OR email='$user'");
            $result = mysqli_fetch_assoc($query);
            $username = $result['username'];
                if(password_verify($password,$result['password'])){
                    $SESSION['login'] = true;
                    echo "<script>
                        alert('Selamat datang $username');
                        document.location.href='users/home-user.php?id_user=$result[id]';
                        </script>";
                        $_SESSION['user_login'] = true;
                        $_SESSION['log_us'] = $result;
                        $_SESSION['id'] = $result->user;
                } else {
                    echo "<script>
                        alert('Username dan Password salah');
                    </script>";
                }

        }
    }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Online Samarinda</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/login-style.css">
    <script src="jquery.js"></script>

    <title>Login</title>
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
                <li><a href=""><img src="logo/icons8-user-30.png" alt="Profile"></a></li>
                <li><a href=""><img src="logo/icons8-cart-32.png" alt="Cart"></a></li>
                <li><a href=""><img src="logo/icons8-home-page-50.png" alt="Home" width="40px" height="40px"></a></li>
            </ul>
        </div> 
    </header>
    <div class="main">
        <div class="tabel">
            <table>
                <tr>
                    <th class="login-pic"><img src="images/business-3d-happy-robot-assistant-waving-hello.png" alt="Hello"></th>
                    <th>
                        <form class="login" action="" method="post">
                            <div class="input-icon">
                                <br><h3>Login Here</h3>
                                
                                <label for="regisUsername"></label> <br>
                                <i class="login-icon"><img src="logo/icons8-contacts-32.png"></i>
                                <input type="text" name="user" placeholder="Username" required>
                                
                                <label for="regisPassword"></label> <br>
                                <i class="login-icon"><img src="logo/icons8-padlock-50.png" width="30px"></i>
                                <input type="password" name="password" placeholder="Password" required> <br>

                                <input type="submit" name="submit" value="Login" class="btn-submit"><br>
                                
                                <p>Belum punya akun?<a href="users/registrasi.php"> Registrasi</a></p><br>
                            </form>
                        </div>
                    </th>
                </tr>
            </table>
        </div>
    </div>
    <footer>s
        <div class="copyright">
            <p><center>@Copyright 2022 - Project Akhir Kelompok 3 B1 20</center></p>
        </div>
    </footer>

</body>
</html>