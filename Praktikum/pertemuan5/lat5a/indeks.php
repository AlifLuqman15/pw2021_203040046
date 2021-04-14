<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
    // Jumat 10.00-11.00
?>

<?php 
require 'php/functions.php';
$barang = query("SELECT * FROM barang")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="css/alif.css">
    <title>Axell Store</title>
</head>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
    <h1 class="centered white-text">Axell Store</h1>
    <table class="centered highlight - white-text grey darken-3">
                <tr class="z-depth-5 pink darken-3 white-text">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Size</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th>Detail</th>
                </tr>
                <?php $i = 1 ?>
                <?php foreach ($barang as $brg) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $brg["Nama"]; ?></td>
                        <td><?= $brg["Deskripsi"]; ?></td>
                        <td><?= $brg["Size"]; ?></td>
                        <td><?= $brg["Harga"]; ?></td>
                        <td><?= $brg["Stok"]; ?></td>
                        <td><img src="assets/pict/<?= $brg["Gambar"]; ?>" alt=""></td>
                        <td>
                        <p class="Nama">
                        <a href="php/detaill.php?Id=<?= $brg['Id']; ?>">Lihat Produk</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
    </div>
</body>
</html>