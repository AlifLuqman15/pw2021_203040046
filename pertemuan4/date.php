<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Pertemuan 4 - 28 Februari 2021
    // Pertemuan kali ini membahas beberapa function yang ada di PHP
    // Beberapa built in function
?>
<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// dibawah ini merupakan beberapa contoh parameter dari date
echo date("l"); // l -- tampilkan nama hari ini
echo date("d"); // d -- tampilkan tanggal hari ini
echo date("M"); // M -- menampilkan bulan dalam bentuk nama
echo date("m"); // m -- bulan dalam bentuk angka
// menggabungkan beberapa parameter
echo date("l, d-M-Y");


// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// MKTime
// Membuat sendiri detik sendiri dari 1 Januari 1970
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
// dibawah ini adalah mengetahui hari dari tanggal 13 Desember 2000
echo date("l", mktime(0,0,0,12,13,2000));

// strtotime
echo date("l", strtotime("13 des 2000"));

?>