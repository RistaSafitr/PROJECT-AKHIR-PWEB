<?php
    require "../config.php";
    if(isset($_GET['id'])){
        $query = mysqli_query($db,"SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
        $result = mysqli_fetch_assoc($query);
        $nama = $result['nama'];
        $email = $result['email'];
        $username = $result['username'];
        $password = $result['password'];
        // $konfirmasi = $result['konfirmasi'];
        $notelp = $result['no_telp'];
        $gender =  $result['gender'];
        $profilepicture =$result['profile_picture'];
    }

    if(isset($_POST['submit'])){
        $query = mysqli_query($db,"UPDATE user SET username='$result[username]',nama='$result[nama]',password='$result[password]',email='$result[email]',notelp='$result[no_telp]',gender='$result[gender]',profile_picture='$result[profile_picture]', WHERE id = '".$_SESSION['id']."'");
        if($query){
            header("Location:akun.php");
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
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1 class="judul">Sistem Informasi Akademik Unmul</h1>
    
        <div class="form">
            <form action="" method="post">
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" class="input" placeholder="Masukkan nama" value='<?=$nama?>'><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" class="input" placeholder="Masukkan email" value='<?=$email?>'><br>

                <label for="username">Username</label><br>
                <input type="text" name="username" class="input" placeholder="Masukkan username"value='<?=$username?>'><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" class="input" placeholder="Password"value='<?=$password?>'><br>

                <label for="konfirmasi">Konfirmasi Password</label><br>
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password"><br>

                <label for="no_telp"><strong>Nomor Telepon </strong> </label> <br>
                <input type="tel" name="no_telp" placeholder="Masukkan no telp" pattern="[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}" value='<?=$notelp?>'> <br>
                
                <p><strong>Gender :</strong> </p>
                <label for="gender">Laki-laki</label>
                <input type="radio" name="gender" value="Laki-laki" value='<?=$gender?>'/><br>
                <label for="gender">Perempuan</label>
                <input type="radio" name="gender" value="Perempuan" value='<?=$gender?>'/> <br><br>

                <label for="nama_gambar">Nama File</label><br>
                <input type="text" name="nama_gambar" class="form-text">
                <label for="profile_picture">Foto Profil</label>
                <input type="file" name="profile_picture" class="form-text" value='<?=$profilepicture?>'><br>

                <input type="submit" name="submit" class="submit" value="Update"><br><br>
            </form>
    </div>

</body>
</html>