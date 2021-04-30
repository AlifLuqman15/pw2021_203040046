<?php
// Alif Luqman Hakim
// 203040046
// https://github.com/AlifLuqman15/pw2021_203040046
// Pertemuan 12 - 30 April 2021
// Pertemuan kali ini membahas Login & Registrasi
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
