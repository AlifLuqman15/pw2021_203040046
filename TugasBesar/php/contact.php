<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <link rel="stylesheet" href="../css/csscontact.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<title>Rugby|O</title>

<body id="home" class="scrollspy">

  <div class="navbar-fixed">
    <nav class="white">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo black-text"><i class="fas fa-store-alt"></i>Rugby|O</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../index.php#buy" class="black-text">Product</a></li>
            <li><a href="./about.php" class="black-text">About</a></li>
            <li><a href="./partner.php" class="black-text">Partner</a></li>
            <li><a href="#contact" class="black-text">Contact</a></li>
            <li><a href="./login.php" class="waves-effect waves-light blue btn-small">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-nav">
    <li><a href="../index.php" class="black-text">Product</a></li>
    <li><a href="./about.php" class="black-text">About</a></li>
    <li><a href="./partner.php" class="black-text">Partner</a></li>
    <li><a href="#contact" class="black-text">Contact</a></li>
    <li><a href="./login.php" class="waves-effect waves-light blue btn-small">Login</a></li>
  </ul>

  <!-- contact -->
  <section id="contact" class="contact scrollspy">
    <div class="container">
      <h3 class="light black-text text-darken-3 center">Contact Us</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel blue darken-3 center light white-text">
            <i class="far fa-envelope small"></i>
            <h5>Jika ada kritik atau saran mengenai layanan kami, silahkan hubungi Customer Service kami.</h5>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Kantor Kami</h4>
            </li>
            <li class="collection-item">
              <div>Wiadasari, Indramayu<a href="https://goo.gl/maps/N5dxUJd5EK26eZ1V9" class="secondary-content"><i class="fas fa-map-marked-alt small"></i></a></div>
            </li>
            <li class="collection-item">
              <div>Customer Service<a href="https://wa.me/6281297864387" class="secondary-content"><i class="fas fa-headset small"></i></a>
              </div>
            </li>
          </ul>
        </div>

        <div class="col m7 s12">
          <form>
            <div class="card-panel light">
              <h5>Tolong isi formulir dibawah ini</h5>
              <div class="input-field">
                <input type="text" name="name" id="name" required class="validate">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone" id="phone">
                <label for="name">Phone Number</label>
              </div>
              <div class="input-field">
                <textarea name="messege" id="messege" class="materialize-textarea"></textarea>
                <label for="messege">Messege</label>
              </div>
              <button type="submit" class="btn light-blue darken-4">Send</button>
            </div>
          </form>
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
  <script src="https://kit.fontawesome.com/7a30603574.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });
  </script>

</body>

</html>