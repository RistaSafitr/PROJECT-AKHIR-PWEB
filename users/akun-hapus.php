<?php
    session_start();
    require '../config.php';
    if($_SESSION['user_login'] != true){
        echo '<script>window.location="akun.php"</script>';
    }

    $query = mysqli_query($db, "SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
    $user = $_SESSION['log_us'];



// require 'config.php';

// $id = $_GET["id"];

$delete_sql = "DELETE FROM user WHERE id = '".$_SESSION['id']."'";
$result = mysqli_query($db, $delete_sql);

if ($result) {
    echo "<script>
        alert('Data berhasil dihapus!');
        document.location.href = '../login.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus!');
        document.location.href = 'akun.php';
    </script>";
}
