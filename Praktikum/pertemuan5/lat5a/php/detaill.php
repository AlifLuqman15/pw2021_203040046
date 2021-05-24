<?php
// Alif Luqman Hakim
// 203040046
// https://github.com/AlifLuqman15/pw2021_203040046
// Tugas Praktikum PW
// Jumat 10.00-11.00
?>

<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['Id'])) {
    header("Location: ../index.php");
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="../css/geo.css">
    <title>Axell Store</title>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/pict/<?= $brg["Gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $brg["Nama"]; ?></p>
            <p><?= $brg["Deskripsi"]; ?></p>
            <p><?= $brg["Size"]; ?></p>
            <p><?= $brg["Harga"]; ?></p>
            <p><?= $brg["Stok"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>