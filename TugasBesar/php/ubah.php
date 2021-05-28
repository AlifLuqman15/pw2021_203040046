<?php
/*
Alif Luqman Hakim
203040046
Shift Jumat 10.00 - 11.00
Informatika-B
*/

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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="../css/cssform.css">
    <title>Rugby|O</title>
</head>

<body>
    <div class="container">
        <h4 class="black-text">Ubah Data Produk</h4>
        <form action="" method="post" enctype="multipart/form-data">

            <input type="hidden" name="Id" value="<?= $brg['Id']; ?>">

            <div class="card-panel">
                <div class="input-field"><br>
                    <input type="text" name="Nama" id="Nama" required value="<?= $brg['Nama']; ?>" class="validate">
                    <label for="Nama">Nama</label>
                </div>
                <div class="input-field"><br>
                    <input type="text" name="Deskripsi" id="Deskripsi" required value="<?= $brg['Deskripsi']; ?>" class="validate">
                    <label for="Deskripsi">Deskripsi</label>
                </div>
                <div class="input-field"><br>
                    <input type="text" name="Size" id="Size" required value="<?= $brg['Size']; ?>" class="validate">
                    <label for="Size">Size</label>
                </div>
                <div class="input-field"><br>
                    <input type="text" name="Harga" id="Harga" required value="<?= $brg['Harga']; ?>" class="validate">
                    <label for="Harga">Harga</label>
                </div>
                <div class="input-field"><br>
                    <input type="text" name="Stok" id="Stok" required value="<?= $brg['Stok']; ?>" class="validate">
                    <label for="Stok">Stok</label>
                </div>
                <div class="input-field">
                    <input type="hidden" name="Gambar_lama" value="<?= $brg['Gambar']; ?>">
                    <label for="Gambar"></label>
                    <input type="file" name="Gambar" id="Gambar" class="gambar black-text" onchange="previewImage()">
                    <img src="../assets/pict/<?= $brg['Gambar']; ?>" alt="" width="120" style="display: block;" class="img-preview">
                </div>

                <button type="submit" name="ubah" class="waves-effect waves-light red lighten-2 btn small">Ubah Data!</button>
                <a href="admin.php" class="waves-effect waves-light red lighten-2 btn small">Kembali</a>
            </div>
        </form>
    </div>
    <script src="../js/scriptt.js"></script>
    <script type="text/javascript" src="..js/materialize.min.js"></script>
</body>

</html>