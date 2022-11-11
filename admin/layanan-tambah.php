<?php
require "../config.php";

if(isset($_POST['tambah'])){
    $jenis_layanan = $_POST['jenis_layanan'];
    $harga= $_POST['harga'];
    if(!empty($_FILES['gambar']['name'])){
        $nama = $_POST['nama_gambar'];
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];
        if(move_uploaded_file($tmp,"../upload/.$gambar_baru")){
            $query = mysqli_query($db,"INSERT INTO  layanan (jenis_layanan, harga, gambar_layanan) VALUES ('$jenis_layanan','$harga','$gambar_baru')");
            if($query){
                header("Location:home-admin.php");
            } else {
                echo "Tambah data error";
            }
        }
    }
} 

?>