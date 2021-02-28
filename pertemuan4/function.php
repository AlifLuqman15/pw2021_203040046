<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Pertemuan 4 - 28 Februari 2021
    // Pertemuan kali ini membahas beberapa function yang ada di PHP
    // Beberapa built in function
?>

<?php 
    //Membuat function disisni
    // biasanya mengembalikan / return
    function salam($nama, $waktu){
        return "Selamat $waktu, $nama!";
    }


    // function juga bisa menggunakan nilai default dengan menggunakan format seperti ini
    // function salam($nama="Admin", $waktu="Datang"){
    //     return "Selamat $waktu, $nama!";
    // }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("AlifL", "Sore"); ?></h1>
</body>
</html>