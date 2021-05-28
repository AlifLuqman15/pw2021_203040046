<?php
/*
Alif Luqman Hakim
203040046
Shift Jumat 10.00 - 11.00
Informatika-B
*/

// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['Id'])) {
    header("Location: ../indeks.php");
    exit;
}
require '../php/functions.php';

// mengambil id dari url 
$Id = $_GET['Id'];


//melakukan query dengan parameter id yang diambil dari url
$brg = query("SELECT * FROM barang WHERE Id = $Id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="../css/cssdetail.css">
    <title>Rugby|O</title>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/pict/<?= $brg["Gambar"]; ?>" alt="" width="250">
        </div>
        <div class="keterangan">
            <table>
                <tr>
                    <th><?= $brg["Nama"]; ?></th>
                    <th><?= $brg["Deskripsi"]; ?></th>
                    <th>Size : <?= $brg["Size"]; ?></th>
                    <th><?= $brg["Harga"]; ?></th>
                    <th>Stok : <?= $brg["Stok"]; ?></th>
                </tr>
            </table>
        </div><br>
        <a href="../index.php" class="waves-effect waves-light blue lighten-2 btn small">Kembali</a>
    </div>
</body>

</html>