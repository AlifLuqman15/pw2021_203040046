<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
    // Jumat 10.00-11.00
?>


<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$barang = query("SELECT * FROM barang");

// jika tombol di klik
if (isset($_GET["cari"]) ) {
    $barang = cari($_GET["keyword"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="../css/budi.css">
    <title>Axell Store</title>
</head>
<body>
<script type="text/javascript" src="../js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Axell Store</h1>
        <div class="add">
            <a href="tambah.php" class="waves-effect waves-light teal btn-small">Tambah Data</a>
            <form action="" method="GET">
               <input class="white-text" type="text" name="keyword" autofocus placeholder="masukkan keyword.." autocomplete="off">
               <button class="waves-effect waves-light teal btn-small" type="submit" name="cari">Search</button>
            </form>
        </div>
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
                    <th>Opsi</th>
                </tr>
                <?php if(empty($barang)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
                <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ($barang as $brg) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $brg["Nama"]; ?></td>
                        <td><?= $brg["Deskripsi"]; ?></td>
                        <td><?= $brg["Size"]; ?></td>
                        <td><?= $brg["Harga"]; ?></td>
                        <td><?= $brg["Stok"]; ?></td>
                        <td><img src="../assets/pict/<?= $brg["Gambar"]; ?>" alt=""></td>
                        <td>
                        <p class="Nama">
                   <a href="../php/detaill.php?Id=<?= $brg['Id']; ?>">Lihat Produk</a>
                        </td>
                        <td>
                            <a href="ubah.php?Id=<?= $brg['Id'] ?>" class="waves-effect waves-light teal btn-small">Ubah</a>
                            <a href="hapus.php?Id=<?= $brg['Id'] ?>" class="waves-effect waves-light pink darken-3 btn-small">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
                <?php endif; ?>
                <div class="logout">
                <a href="logout.php" class="waves-effect waves-light pink btn-small">Logout</a>
                </div>
    </div>
</body>
</html>