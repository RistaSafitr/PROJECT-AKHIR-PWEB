
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Online Samarinda</title>
    <link rel="stylesheet" href="../style/dark-mode.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/login-style.css">
    <!-- <script src="javaScript.js"></script> -->
    <script src="jquery.js"></script>
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
                <!-- <li><a href=""><img src="" alt="Profile"></a></li> -->
                <li><a href=""><img src="../logo/icons8-user-30.png" alt="Profile"></a></li>
                <li><a href=""><img src="../logo/icons8-cart-32.png" alt="Cart"></a></li>
                <li><a href=""><img src="../logo/icons8-home-page-50.png" alt="Home" width="40px" height="40px"></a></li>
            </ul>
        </div> 
    </header>
    <div class="main">
        <div class="tabel">
            <table>
                <tr>
                    <th colspan="2"><center><h2>REGISTRASI</h2></center></th>
                </tr>
                <tr>
                    <!-- <th class="login-pic"><img src="images/business-3d-happy-robot-assistant-waving-hello.png" alt="Hello"></th> -->
                    <th>
    <div class="container regis">

        <div class="judul">
            <!-- <h2>Registrasi</h2> -->
        </div>
        
        <div class="form">
            <form action="akun-tambah.php" method="post">
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" class="input" placeholder="Masukkan nama" required><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" class="input" placeholder="Masukkan email" required><br>

                <label for="username">Username</label><br>
                <input type="text" name="username" class="input" placeholder="Masukkan username" required><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" class="input" placeholder="Password" required><br>

                <label for="konfirmasi">Konfirmasi Password</label><br>
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password" required><br>

                <label for="no_telp"><strong>Nomor Telepon </strong> </label> <br>
                <input type="tel" name="no_telp" placeholder="Masukkan no telp" pattern="[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}" required> <br>
                
                <p><strong>Gender :</strong> </p>
                <label for="gender">Laki-laki</label>
                <input type="radio" name="gender" value="Laki-laki"/><br>
                <label for="gender">Perempuan</label>
                <input type="radio" name="gender" value="Perempuan"/> <br><br>

                <label for="nama_gambar">Nama File</label><br>
                <input type="text" name="nama_gambar" class="form-text">
                <label for="profile_picture">Foto Profil</label>
                <input type="file" name="profile_picture" class="form-text" required><br>

                <input type="submit" name="submit" class="submit" value="Registrasi"><br><br>
            </form>

            <p>Sudah punya akun?
                <a href="../login.php">Login</a>
            </p>
        
        </div>
    </div>

</body>
</html>