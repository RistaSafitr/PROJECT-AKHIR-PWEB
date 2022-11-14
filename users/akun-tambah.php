<?php
    require "../config.php";
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $notelp = $_POST['no_telp'];
        $gender =  $_POST['gender'];

        $profilepicture =$_POST['profile_picture'];

        $query = mysqli_query($db,"SELECT * FROM user WHERE username='$username'");
        if(mysqli_fetch_assoc($query)){
            echo "<script>
                alert('Username sudah digunakan');
            </script>";
        } else {
            if($password == $konfirmasi){
                $password = password_hash($password,PASSWORD_DEFAULT);
                $query = mysqli_query($db,"INSERT INTO user (username,password,nama,gender,email,no_telp,profile_picture) 
                VALUES ('$username','$password','$nama','$gender','$email','$notelp','$profilepicture')");
                if($query){
                    echo "<script>
                        alert('Register Berhasil');
                        document.location.href='../login.php';
                    </script>";
                } else {
                    echo "<script>
                        alert('Register Gagal');
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Password dan konfirmasi password anda berbeda');
                </script>";
            }
        }
    }
?>