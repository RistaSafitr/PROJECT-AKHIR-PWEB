<?php
    session_start();
    require "../config.php";
    if($_SESSION['user_login'] != true){
        echo '<script>window.location="home-user.php"</script>';
    }

    $query = mysqli_query($db, "SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
    $user = $_SESSION['log_us'];

    if(isset($_GET['id'])){
        $cart = $_GET['id'];
        $id_user = $user['id'];
        // $username = $user["username"];
        $query = mysqli_query($db, "SELECT * FROM layanan WHERE id='$cart'");
        $result = mysqli_fetch_array($query);
        if(isset($query)){
            $layanan = $result['jenis_layanan'];
            $harga = $result['harga'];
            $query = mysqli_query($db, "INSERT INTO keranjang (id_user, id_layanan, nama_layanan, harga) VALUES ('$id_user', '$cart', '$layanan', '$harga')");
            if($query){
                echo "<script>
                    alert('Dimasukkan Ke Keranjang');
                </script>";
                header("Location:home-user.php");
            } else {
                echo "error";
            }
        }
        // $result = mysqli_fetch_array($query);
    } else {
        echo "gagal Input Data";
        // $query = mysqli_query($db, "SELECT * FROM Layanan");
    }
?>