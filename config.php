<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "printonline_smd";
$db = mysqli_connect($hostname,$username,$password,$database);
if(!$db){
  echo "gagal terhubung";
}
?>