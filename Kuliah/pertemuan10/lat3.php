<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Pertemuan 10 - 23 April 2021
    // Pertemuan kali ini membahas Koneksi & Insert Data
?>


<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpading="10" cellspacing="0">
    <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
    </tr>
         <?php $i = 1;
                foreach ($mahasiswa as $m) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><img src="foto/<?= $m["gambar"]; ?>" alt="" width="130"></td>
                        <td><?= $m["nama"]; ?></td>
    <td>
    <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
    </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>