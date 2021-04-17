<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
    // Jumat 10.00-11.00
?>

<?php
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
