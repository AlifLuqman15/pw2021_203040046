<?php
// Alif Luqman Hakim
// 203040046
// https://github.com/AlifLuqman15/pw2021_203040046
// Tugas Praktikum PW
// Jumat 10.00-11.00
// Merubah Field Nama Barang menjadi Nama alasannya agar mempermudah ketika memanggil di codingan Tanggal 11 April 2021
// Merubah Field No menjadi Id alasannya agar mempermudah kodingan karena tadi error terus Tanggal 12 April 2021
// Merubah nama indeks menjadi index tanggal 24 Mei 2021
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="css/styleee.css">
    <title>Axell Store</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <table class="centered teal lighten-4">
            <tr class="cyan lighten-5">
                <th>No</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Size</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Foto</th>
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
                    <td><img src="assets/imgg/<?= $brg["Gambar"]; ?>" alt=""></td>
                    <td>
                        <p class="Nama">
                            <a href="php/detaill.php?id_brg=<?= $brg['Id']; ?>">
                                <?= $brg["Nama"]; ?>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
    </div>
</body>

</html>