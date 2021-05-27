<?php
require '../php/functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM barang
            WHERE
            Nama LIKE '%$keyword%' OR
            Deskripsi LIKE '%$keyword%' OR
            Size LIKE '%$keyword%' OR
            Harga LIKE '%$keyword%' OR
            Stok LIKE '%$keyword%'
            ";
$barang = query($query);
?>

<?php $i = 1; ?>
<?php foreach ($barang as $brg) : ?>
  <div class="col m3 s12">
    <div class="card-small">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="assets/pict/<?= $brg["Gambar"]; ?>">
      </div>
      <div class="card-content">
        <span class="card-tittle activator black-text"><?= $brg["Nama"]; ?><i class="material-icons right">more_vert</i></span>
        <p>
          <a href="./php/detaill.php?Id=<?= $brg['Id']; ?>">Lihat Produk</a>
        </p>
      </div>
    </div>
  </div>
  <?php $i++; ?>
<?php endforeach; ?>