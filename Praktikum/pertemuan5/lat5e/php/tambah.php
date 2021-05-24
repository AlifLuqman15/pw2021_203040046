<?php
// Alif Luqman Hakim
// 203040046
// https://github.com/AlifLuqman15/pw2021_203040046
// Tugas Praktikum PW
// Jumat 10.00-11.00
?>


<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.href = 'admin.php';
                    </script>";
    } else {
        echo "<script>
            alert('Data Gagal ditambahkan!');
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="../css/ger.css">
    <title>Axell Store</title>
</head>

<body>
    <script type="text/javascript" src="..js/materialize.min.js"></script>
    <div class="container">
        <h3>Form Tambah Barang</h3>
        <form action="" method="post">
            <div class="card-panel">
                <div class="input-field">
                    <input type="text" name="Nama" id="Nama" required class="validate">
                    <label for="Nama">Nama Barang</label>
                </div>
                <div class="input-field">
                    <input type="text" name="Deskripsi" id="Deskripsi" required class="validate">
                    <label for="Deskripsi">Deskripsi</label>
                </div>
                <div class="input-field">
                    <input type="text" name="Size" id="Size" required class="validate">
                    <label for="Size">Size</label>
                </div>
                <div class="input-field">
                    <input type="text" name="Harga" id="Harga" required class="validate">
                    <label for="Harga">Harga</label>
                </div>
                <div class="input-field">
                    <input type="text" name="Stok" id="Stok" required class="validate">
                    <label for="Stok">Stok</label>
                </div>
                <div class="input-field">
                    <input type="text" name="Gambar" id="Gambar" required class="validate">
                    <label for="Gambar">Foto</label>
                </div>
                <button type="submit" name="tambah" class="waves-effect waves-light red lighten-2 btn small">Tambah Data!</button>
                <a href="../index.php" class="waves-effect waves-light red lighten-2 btn small">Kembali</a>
            </div>
        </form>
    </div>
</body>

</html>