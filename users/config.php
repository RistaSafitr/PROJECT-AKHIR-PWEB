<!-- <?php

// $server = "localhost";
// $username = "root";
// $password = "";
// $db_name = "printonline";

// $db = new mysqli($server,$username,$password,$db_name);

// if(!$db){
//     die("Gagal terhubung : ".$db->connect_error);
// }

?> -->

<?php

$db = mysqli_connect("localhost","root","","printonline_smd");
if(!$db){
  die("Gagal Terhubung");
}