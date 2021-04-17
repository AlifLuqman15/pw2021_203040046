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

    require 'functions.php';

    $Id = $_GET['Id'];
    $brg = query("SELECT * FROM barang WHERE Id = $Id")[0];

    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo "<script>
                        alert('Data Berhasil diubah!');
                        document.location.href = 'admin.php';
                    </script>";
        } else {
            echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'admin.php';
            </script>";
        }
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
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="../css/ger.css">
    <title>Axell Store</title>
</head>
<body>
<script type="text/javascript" src="..js/materialize.min.js"></script>
    <div class="container">
<h2>Ubah Data Produk</h2>
<form action="" method="post">
    <input type="hidden" name="Id" value="<?= $brg['Id']; ?>">
   <div class="card-panel">
   <div class="input-field">
   <input type="text" name="Nama" id="Nama" required value="<?= $brg['Nama']; ?>">
   <label for="Nama">Nama Barang</label>
   </div>
   <div class="input-field">
   <input type="text" name="Deskripsi" id="Deskripsi" required value="<?= $brg['Deskripsi']; ?>">
   <label for="Deskripsi">Deskripsi</label>
   </div>
   <div class="input-field">
   <input type="text" name="Size" id="Size" required value="<?= $brg['Size']; ?>">
   <label for="Size">Size</label>
   </div>
   <div class="input-field">
   <input type="text" name="Harga" id="Harga" required value="<?= $brg['Harga']; ?>">
   <label for="Harga">Harga</label>
   </div>
   <div class="input-field">
   <input type="text" name="Stok" id="Stok" required value="<?= $brg['Stok']; ?>">
   <label for="Stok">Stok</label>
   </div>
   <div class="input-field">
   <input type="text" name="Gambar" id="Gambar" required value="<?= $brg['Gambar']; ?>">
   <label for="Gambar">Foto</label>
   </div>
   <button type="submit" name="ubah" class="waves-effect waves-light red lighten-2 btn small">Ubah Data!</button>
   <a href="../indeks.php" class="waves-effect waves-light red lighten-2 btn small">Kembali</a>
   </div>
   </form>
    </div>
</body>
</html>