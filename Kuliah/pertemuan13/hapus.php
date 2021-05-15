<?php
// Alif Luqman Hakim
// 203040046
// https://github.com/AlifLuqman15/pw2021_203040046
// Pertemuan 13 - 16 Mei 2021
// Pertemuan kali ini membahas Live Searching & Upload Gambar
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal dihapus!";
}
