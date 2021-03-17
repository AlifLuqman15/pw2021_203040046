<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
    // Jumat 10.00-11.00
?>


<?php 
$pemainBola = [
    "Juventus"=>"Cristiano Ronaldo",
    "Barcelona"=>"Lionel Messi",
    "Real Madrid"=>"Luka Modric",
    "Liverpool"=>"Mohammad Salah",
    "Paris Saint Germain"=>"Neymar Jr",
    "Liverpool"=>"Sadio Mane",
    "Ac Milan"=>"Zlatan Ibrahimovic"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lat3c</title>
</head>
<style>
        .kotak {
            border: 2px solid black;
            width: 50%;
            padding: 10px;
        }
</style>
</head>
<body>
    <div class="kotak">
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
    <table>
            <?php foreach ($pemainBola as $club => $pemain) : ?>
                <tr>
                    <td><b><?= $pemain; ?></b></td>
                    <td>:</td>
                    <td><?= $club; ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
    </div>
</body>
</html>