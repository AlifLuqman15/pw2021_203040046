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
if (isset($_GET["cari"])) {
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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="../css/cssadmin.css">
    <title>Rugby|O</title>
</head>

<body>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script></script>
    <div class="container">
        <h4 class="centered black-text">Rugby|O</h4>
        <div class="add">
            <a href="tambah.php" class="waves-effect waves-light cyan btn-small">Tambah Data</a>
            <form action="" method="GET">
                <input class="black-text" type="text" name="keyword" autofocus placeholder="masukkan keyword.." autocomplete="off">
                <button class="waves-effect waves-light cyan btn-small" type="submit" name="cari">Search</button>
                <br><br>
            </form>
        </div>
        <table class="centered highlight - black-text transparent">
            <tr class="cyan lighten-4 black-text">
                <th>No</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Detail</th>
                <th>Opsi</th>
            </tr>
            <?php if (empty($barang)) : ?>
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
                        <td class="black-text"><?= $brg["Nama"]; ?></td>
                        <td><img src="../assets/pict/<?= $brg["Gambar"]; ?>" alt=""></td>
                        <td>
                            <p class="Nama">
                                <a href="../php/detaill.php?Id=<?= $brg['Id']; ?>">Lihat Produk</a>
                        </td>
                        <td>
                            <a href="ubah.php?Id=<?= $brg['Id'] ?>" class="waves-effect waves-light teal btn-small">Ubah</a>
                            <a href="hapus.php?Id=<?= $brg['Id'] ?>" onclick="return confirm('Apakah anda yakin??');" class="waves-effect waves-light pink darken-3 btn-small">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="logout">
                <a href="logout.php" class="waves-effect waves-light pink btn-small">Logout</a>
                <br><br>
            </div>
    </div>
</body>

</html>