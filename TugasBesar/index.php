<?php
require './php/functions.php';
$barang = query("SELECT * FROM barang");

// jika tombol di klik
if (isset($_GET["cari"])) {
  $barang = cari($_GET["keyword"]);
}
?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <link rel="stylesheet" href="css/cssindexx.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<title>Rugby|O</title>
<link rel="shortcut icon" href="assets/logo/Logo.jpg" type="image/x-icon">

<body id="home" class="scrollspy">

  <div class="navbar-fixed">
    <nav class="white">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo black-text"><i class="fas fa-store-alt"></i>Rugby|O</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#buy" class="black-text">Product</a></li>
            <li><a href="php/about.php" class="black-text">About</a></li>
            <li><a href="php/partner.php" class="black-text">Partner</a></li>
            <li><a href="php/contact.php" class="black-text">Contact</a></li>
            <li><a href="php/login.php" class="waves-effect waves-light blue btn-small">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-nav">
    <li><a href="#buy" class="black-text">Product</a></li>
    <li><a href="php/about.php" class="black-text">About</a></li>
    <li><a href="php/partner.php" class="black-text">Partner</a></li>
    <li><a href="php/contact.php" class="black-text">Contact</a></li>
    <li><a href="php/login.php" class="waves-effect waves-light blue btn-small">Login</a></li>
  </ul>

  <!-- sliders -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/bg/Menu.png">
        <div class="caption left">
          <h2 class="light black-text text-lighten-3">Hallo</h2>
          <h4 class="light black-text text-lighten-3">Selamat Datang.</h4><br><br>
          <a href="#new" class="btn-large waves-effect waves-light orange">Find More</a>
        </div>
      </li>
    </ul>
  </div>

  <!-- new product -->
  <section id="new" class="new scrollspy">

    <div class="container product">
      <h3 class="center light black-text">New Product</h3><br>
      <div class="row"><br>
        <div class="col m4 s12 center">
          <img src="assets/sample/sample3.jpg" class="responsive-img  materialboxed">
        </div>
        <div class="col m4 s12 center">
          <img src="assets/sample/sample2.jpg" class="responsive-img  materialboxed">
        </div>
        <div class="col m4 s12 center">
          <img src="assets/sample/sample1.jpg" class="responsive-img  materialboxed">
        </div>
      </div>
    </div>
  </section>

  <!-- shop -->
  <section id="buy" class="buy scrollspy">
    <div class="container">
      <div class="row"><br><br>
        <form action="" method="GET">
          <input class="black-text" type="text" name="keyword" placeholder="masukkan keyword.." autocomplete="off" id="keyword">
          <button class="waves-effect waves-light teal btn-small" type="submit" name="cari" id="tombol-carii">Search</button>
          <br><br>
        </form>
        <div id="container">
          <?php if (empty($barang)) : ?>
            <tr>
              <td colspan="7">
                <h1>Data tidak ditemukan</h1>
              </td>
            </tr>
          <?php else : ?>
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
          <?php endif; ?>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- footer -->
  <section class="footer">
    <div class="container">
      <div class="sec aboutus">
        <h3>About Us</h3>
        <p>Rugby|O hadir dari hasil pemikiran anak bangsa, berdiri pada tanggal 23 April 2021.
          Rugby|O sendiri adalah online fashion store yang diciptakan untuk memudahkan berbelanja fashion namun
          dengan dirumah saja tanpa harus pergi ke tempat perbelanjaan secara langsung. Apalagi di keadaan
          pandemi ini kita harus membatasi kegiatan di luar rumah, dan Rugby|O hadir untuk memenuhi kebutuhan anda!.</p>
        <ul class="sci">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>

      <div class="sec quickLinks">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Terms & Consitions</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="sec contact1">
        <h3>Contact Info</h3>
        <ul class="info">
          <li>
            <span><i class="fa fa-map-marker-alt"></i></span>
            <span><a href="https://goo.gl/maps/N5dxUJd5EK26eZ1V9">Wiadasari Road<br>
                Indramayu, 45271,<br>Indonesia</a></span>
          </li>

          <li>
            <span><i class="fa fa-phone"></i></span>
            <span><a href="tel:081297864387">+62 812 9786 4387</a>
            </span>
          </li>

          <li>
            <span><i class="fa fa-envelope"></i></span>
            <span><a href="mailto:alifluqman994@gmail.com">rugbyo@gmail.com</a><br>
            </span>
          </li>
        </ul>
      </div>

    </div>
  </section>

  <div class="copy">
    <p>Copyright &copy; 2020 Rugby|O Company. All Rights Reserved</p>
  </div>




  <!--JavaScript at end of body for optimized loading-->
  <script src="js/scriptt.js"></script>
  <script src="https://kit.fontawesome.com/7a30603574.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 900,
      transition: 600,
      interval: 4000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 25
    });
  </script>
</body>

</html>