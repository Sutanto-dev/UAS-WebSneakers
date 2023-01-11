<?php

session_start();
include "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="../images/logo2.png" type="image/x-icon">

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="../assets/css/styles.css">

  <title>Sneakers - Sutanto Dwi Putra</title>
</head>

<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav__logo">
        <img src="../images/landscape.png" alt="Logo" width="100px">

      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="index_customers.php #home" class="nav__link">Home</a>
          </li>

          <li class="nav__item">
            <a href="index_customers.php #popular" class="nav__link">Popular</a>
          </li>

          <li class="nav__item">
            <a href="index_customers.php #about" class="nav__link">About Us</a>
          </li>

          <li class="nav__item">
            <a href="index_customers.php #recently" class="nav__link">Contact</a>
          </li>

          <li class="nav__item">
            <a href="#account" class=" nav__link2">Account</a>
          </li>
        </ul>

        <!-- Close Button -->
        <div class="nav__close" id="nav-close">
          <i class="ri-close-line"></i>
        </div>
        <img src="assets/img/leaf-branch-4.png" alt="" class="nav__img-1">
        <img src="assets/img/leaf-branch-3.png" alt="" class="nav__img-2">
      </div>
      <div class="nav__buttons">
        <i class="ri-moon-line change-theme" id="theme-button"></i>
        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-apps-2-line"></i>
        </div>
      </div>
    </nav>

  </header>

  <!--==================== MAIN ====================-->
  <main class="main">
    <main>
      <h1 class="title">Data Akun</h1>
      <ul class="breadcrumbs">
        <li><a href="#">Akun</a></li>
        <li class="divider">/</li>
        <li><a href="#" class="active">Profile</a></li>
      </ul>
      <div class="info-data">
        <div class="card">
          <!-- <h1 class="title" style="margin: 0 auto;">Akun Kamu</h1>
          <hr width="18%" noshade=""> -->
          <div class="head">
            <table class="table1">
              <?php $_SESSION['id']; ?>
              <tr>
                <td> <span style=" font-size: 14px; font-weight:500; margin: 0 auto;">Nama Lengkap :</span> <br>
                  <?php echo $_SESSION['nama']; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <span style=" font-size: 14px; font-weight:500; margin: 0 auto;">Alamat :</span> <br>
                  <?php echo $_SESSION['alamat']; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <span style=" font-size: 14px; font-weight:500; margin: 0 auto;">Jenis Kelamin :</span> <br>
                  <?php echo $_SESSION['jenis_kelamin']; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <span style=" font-size: 14px; font-weight:500; margin: 0 auto;">E-Mail :</span> <br>
                  <?php echo $_SESSION['email']; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <span style=" font-size: 14px; font-weight:500; margin: 0 auto;">No HP :</span> <br>
                  <?php echo $_SESSION['nohp']; ?>
                </td>
              </tr>
              <tr>
                <td><a href="edit_akun.php?id_sepatu=<?php echo $_SESSION['id_sepatu']; ?>" class="btn-edit">Update
                    Profile</a>
                  <a href="../admin/logout_admin.php" class="btn-hapus">Keluar</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
    </main>
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
    </section>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__container container grid">
        <div>
          <a href="#" class="footer__logo">About Me</a>

          <p class="footer__description">
            Sutanto Dwi Putra <br>22110233 <br>Teknik Informatika RPL D2.
          </p>
        </div>

        <div class="footer__content">
          <div>
            <h3 class="footer__title">Main Menu</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">About</a>
              </li>
              <li>
                <a href="#" class="footer__link">Menus</a>
              </li>
              <li>
                <a href="#" class="footer__link">Offer</a>
              </li>
              <li>
                <a href="#" class="footer__link">Events</a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="footer__title">Information</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">Contact</a>
              </li>
              <li>
                <a href="#" class="footer__link">Order & Returns</a>
              </li>
              <li>
                <a href="#" class="footer__link">Videos</a>
              </li>
              <li>
                <a href="#" class="footer__link">Reservation</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Address</h3>
            <ul class="footer__links">
              <li class="footer__information">
                Av. Hacienda 1234 <br>Lima 4321, Perú
              </li>
              <li class="footer__information">
                9AM - 11PM
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Social Media</h3>
            <ul class="footer__social">
              <a href="https://www.facebook.com" target="_blank" class="footer__social-link">
                <i class="ri-facebook-circle-fill"></i>
              </a>
              <a href="https://www.instagram.com" target="_blank" class="footer__social-link">
                <i class="ri-instagram-fill"></i>
              </a>
              <a href="https://www.twitter.com" target="_blank" class="footer__social-link">
                <i class="ri-twitter-fill"></i>
              </a>
            </ul>
          </div>
        </div>
        <img src="../assets/img/spring-onion.png" alt="" class="footer__onion">
        <img src="../assets/img/spinach-leaf.png" alt="" class="footer__spinach">
        <img src="../assets/img/leaf-branch-4.png" alt="" class="footer__leaf">
      </div>
      <div class="footer__info container">
        <div class="footer__card">
          <img src="../assets/img/footer-card-1.png" alt="">
          <img src="../assets/img/footer-card-2.png" alt="">
          <img src="../assets/img/footer-card-3.png" alt="">
          <img src="../assets/img/footer-card-4.png" alt="">
        </div>
        <span class="footer__copy">
          &#169;2022 Copyright Sutanto. All rights reserved
        </span>
      </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>