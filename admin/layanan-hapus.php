<?php
require "../config.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM layanan WHERE id=$_GET[id]");
  if($query){
    header("Location:layanan.php");
  } else {
    echo "Delete gagal";
  }
}
?>