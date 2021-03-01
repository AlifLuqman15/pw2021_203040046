<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lat1b AlifL</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($x=1; $x<=5; $x++) : ?>
                <th>Kolom <?= $x; ?></th>
            <?php endfor; ?>


        </tr>
        <!-- Tambahkan baris kode php untuk menampilkan bagian Body Table -->
        <?php for ($x=1; $x<=5; $x++) : ?>
        <tr>
            <th>Baris <?= $x; ?></th>
            <?php for ($z=1; $z<=5; $z++) : ?>
                <td>Baris <?= $x ?>, Kolom <?= $z; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
    </body>
</html>