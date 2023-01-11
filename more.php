<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/style2.css">

  <title>Sneakers - Sutanto Dwi Putra</title>
</head>

<body>

  <header class="header" id="header">
    <nav class="nav container">
      <a href="index.php" class="nav__logo">
        <img src="images/landscape.png" alt="Logo" width="100px">

      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="index.php" class="nav__link">Home</a>
          </li>

          <li class="nav__item">
            <a href="index.php #popular" class="nav__link">Popular</a>
          </li>

          <li class="nav__item">
            <a href="index.php #about" class="nav__link">About Us</a>
          </li>

          <li class="nav__item">
            <a href="index.php #recently" class="nav__link">Recently</a>
          </li>

          <li class="nav__item">
            <a href="login.php" class="nav__link2">Login</a>
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
  <section class="popular section" id="popular">
    <span class="section__subtitle">Sneakers</span>
    <h2 class="section__title">Best Collections</h2>
    <?php
    $query = "select * from produk";
    $result = mysqli_query($conn, $query);
    $kolom = 12;
    $i = 1;
    ?>
    <div class="popular__container container grid">
      <?php while ($data = mysqli_fetch_array($result)) {
        if (($i) % $kolom == 1) {
        }
        ?>
        <article class="popular__card">


          <img src="images/<?php echo
            $data['gambar_sepatu']; ?>" class="popular__img">
          <!-- <img src="images/sepatu1.png" alt="" class="popular__img"> -->
          <h3 class="popular__name">
            <?php echo $data['nama_sepatu']; ?>
          </h3>
          <span class="popular__description"> <?php echo $data['brand']; ?></span>
          <span class="popular__price">Rp. <?php echo $data['harga']; ?></span>
          <button class="popular__button">
            <i class="ri-shopping-bag-line"></i>
          </button>
        </article>

        <?php
        if (($i) % $kolom == 1) {
        }
        $i++;
      }
      ?>
      <!-- <i class="ri-arrow-right-line"></i> -->
    </div>
  </section>


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
      <img src="assets/img/spring-onion.png" alt="" class="footer__onion">
      <img src="assets/img/spinach-leaf.png" alt="" class="footer__spinach">
      <img src="assets/img/leaf-branch-4.png" alt="" class="footer__leaf">
    </div>
    <div class="footer__info container">
      <div class="footer__card">
        <img src="assets/img/footer-card-1.png" alt="">
        <img src="assets/img/footer-card-2.png" alt="">
        <img src="assets/img/footer-card-3.png" alt="">
        <img src="assets/img/footer-card-4.png" alt="">
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