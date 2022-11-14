<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print online</title>
    <link rel="stylesheet" href="../style/admin-css2.css">
    <link rel="stylesheet" href="../style/input.css">
</head>

<body>
    <h1 class="judul">Sistem print online</h1>
    <div class="list-table center" style="overflow-x: auto;">
        <h3><?php
        date_default_timezone_set("Asia/Makassar");
        $waktu = strtotime("now");
        echo "Hari ini : ".date("l, Y/m/d H:i:s a",$waktu);?></h3>
        <table>
            <thead>
                <tr>
                    <th colspan="7" class="thead">
                        <h3 class="center">Daftar pemesan</h3>
                    </th>
                    <th style="width: 20px;" colspan="2">
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th nowrap>jenislayanan</th>
                    <th>harga</th>
                    <th>file</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "../config.php";
                $query = mysqli_query($db, "SELECT * FROM layanan "); 
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td nowrap><?=$row['jenis_layanan']?></td>
                        <td><?=$row['harga']?></td>
                        <td><img width="60px" src="../upload/.<?=$row['gambar_layanan']?>" alt="<?=$row['gambar_layanan']?>"> </td>
                        </td>
                        </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>