<?php
/*
Alif Luqman Hakim
203040046
Shift Jumat 10.00 - 11.00
Informatika-B
*/

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$Id = $_GET['Id'];

if (hapus($Id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!!');
          document.location.href = 'admin.php';
          </script>";
} else {
  echo "<script>
    alert('Data gagal dihapus!!');
    document.location.href = 'admin.php';
    </script>";
}
