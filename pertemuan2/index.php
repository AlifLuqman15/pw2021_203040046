<?php 
/*
Alif Luqman Hakim
203040046
https://github.com/AlifLuqman15/pw2021_203040046
Pertemuan 2 - 15 Februari 2021
Mempelajari mengenai sintaks PHP
*/
?>
<?php
// Standar Output
// echo, print
?>


<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// var_dump
// echo"AlifL <br>";
//             print "AlifL <br>";
//             print_r ("AlifL <br>");
//             var_dump("AlifL");''

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

        //  Variabel dan Tipe Data
        //  Variabel
        //  tidak boleh diawali dengan angka, tapi boleh mengandung angka

                //  Operator
                //  aritmatika
                //      + - * / %
                //      $x = 10;
                //      $y = 20;
                //      echo $x * $y;

//  penggabung string / concatenation / concat
//  .
// $nama_depan = "Alif";
// $nama_belakang = "Luqman";
// echo $nama_depan . $nama_belakang;
// echo $nama_depan . " " . $nama_belakang;

        // Assignment
        // =, +=, -=, *=, /=, %=, .=
        // $x = 1;
        // $x += 5;
        // echo $x;

        // $nama = "Alif";
        // $nama .= " ";
        // $nama .= "Luqman";
        // echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 > 5);
// var_dump(5 < 7);
// var_dump(1 == "1");

        // identitas
        // ===, !==
        // var_dump(5 === 7);

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);

    // contoh PHP dalam HTML
    // contoh HTML dalam PHP
    $nama = "AlifL";

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
            <meta charset="UTF-8">
            <title>Belajar PHP</title>    
    </head>

    <body>
        <h1>Hallo, Selamat Datang <?php echo $nama; ?></h1>  
        <p><?php echo "ini adalah paragraf"; ?></p>
    </body>
    </html>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>

        <?php 
        echo "<h1>AlifL</h1>" //contoh html didalam php
        ?>


    </body>
    </html>
