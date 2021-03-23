<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
    // Jumat 10.00-11.00
?>

<?php 
 $conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040046");
$result = mysqli_query($conn, "SELECT * FROM barang");


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
        <link rel="stylesheet" href="css/styleeee.css">
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
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row["Nama Barang"]; ?></td>
                        <td><?= $row["Deskripsi"]; ?></td>
                        <td><?= $row["Size"]; ?></td>
                        <td><?= $row["Harga"]; ?></td>
                        <td><?= $row["Stok"]; ?></td>
                        <td><img src="assets/imgg/<?= $row["Gambar"]; ?>" alt=""></td>
                    </tr>
                    <?php $i++ ?>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>