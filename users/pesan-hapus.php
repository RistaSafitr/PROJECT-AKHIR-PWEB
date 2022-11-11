<?php
require "config.php";
if(isset($_GET['id_pesanan'])){
  $query = mysqli_query($db,"DELETE FROM keranjang_pesanan WHERE id_pesanan=$_GET[id_pesanan]");
  if($query){
    header("Location:index.php");
  } else {
    echo "Delete gagal";
  }
}
?>