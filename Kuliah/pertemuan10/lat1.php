<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Pertemuan 10 - 23 April 2021
    // Pertemuan kali ini membahas Koneksi & Insert Data
?>

<?php 
// Koneksi ke DB dan Pilih Database
$conn = mysqli_connect('Localhost', 'root', '', 'pw_203040046');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam Array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// tampung ke variabel mahasiswa
$mahasiswa = $rows;
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

    <table border="1" cellpading="10" cellspacing="0">
    <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Aksi</th>
    </tr>
         <?php $i = 1;
                foreach ($mahasiswa as $m) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><img src="foto/<?= $m["gambar"]; ?>" alt="" width="130"></td>
                        <td><?= $m["nrp"]; ?></td>
                        <td><?= $m["nama"]; ?></td>
                        <td><?= $m["email"]; ?></td>
                        <td><?= $m["jurusan"]; ?></td>
    <td>
    <a href="">ubah</a> | <a href="">hapus</a>
    </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>