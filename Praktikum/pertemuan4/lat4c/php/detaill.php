<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
    // Jumat 10.00-11.00
    // Merubah Field Nama Barang menjadi Nama Alasannya agar mempermudah ketika memanggil di codingan Tanggal 11 April 2021
    // Merubah Field No menjadi Id Alasannya agar mempermudah kodingan karena tadi error terus Tanggal 12 April 2021
?>

<?php 
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id_brg']) ) {
    header("Location: ../indeks.php");
    exit;
}
require '../php/functions.php';

// mengambil id dari url 
$id = $_GET['id_brg'];


//melakukan query dengan parameter id yang diambil dari url
$brg = query("SELECT * FROM barang WHERE Id = $id")[0];

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
        <link rel="stylesheet" href="css/style.css">
    <title>Axell Store</title>
</head>
<body>
    <div class="container">
    <div class="gambar">
    <img src="../assets/imgg/<?= $brg["Gambar"]; ?>" alt="">
    </div>
    <div class="keterangan">
    <p><?= $brg["Nama"]; ?></p>
    <p><?= $brg["Deskripsi"]; ?></p>
    <p><?= $brg["Size"]; ?></p>
    <p><?= $brg["Harga"]; ?></p>
    <p><?= $brg["Stok"]; ?></p>
    </div>
    <button class="tombol-kembali"><a href="../indeks.php">Kembali</a></button>
    </div>
</body>
</html>