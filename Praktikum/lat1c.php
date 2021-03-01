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
    <title>Lat1c AlifL</title>
    <style>
        h3{
            background-color: salmon;
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 100%;
            border: 2px solid black;
            margin: 0px 5px 10px 0px;
        }
    </style>
</head>
<body>
    <?php for ($i=1; $i<=3; $i++) : ?>
        <?php for ($x=1; $x<=$i; $x++) : ?>
            <h3><?= $i ?></h3>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
    </body>
</html>