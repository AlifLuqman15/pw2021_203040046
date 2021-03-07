<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Pertemuan 5 - 07 Maret 2021
    // Pertemuan kali ini membahas Array pada bahasa pemrograman PHP
?>

<?php 
// Array numerik -- menggunakan index angka
// Array asosiatif -- indexnya string


// Array biasa atau 1 dimensi
$mahasiswaB = ["Luqman Alif", "203040046", "Teknik Informatika", "Email : lqmn@yahoo.com"]; 

//Array multi dimensi atau array didalam array
$mahasiswa = [
    [" Alif", " 203040046", " Teknik Informatika", " alif@yahoo.com"],
    [" Saeful", " 203040090", " Teknik Informatika", " epul@yahoo.com"],
    [" Adam", " 203040066", " Teknik Informatika", " adam@yahoo.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<!-- Menggunakan looping -->
    <?php foreach ($mahasiswaB as $mhs) : ?>
        <li><?= $mhs ?></li>
    <?php endforeach; ?>
    
    <br>

<!-- Manual -->
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>NRP :<?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>