<?php

session_start();
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
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Sneakers - Sutanto Dwi Putra</title>
</head>

<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav__logo">
        <img src="images/landscape.png" alt="Logo" width="100px">

      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link">Home</a>
          </li>

          <li class="nav__item">
            <a href="#popular" class="nav__link">Popular</a>
          </li>

          <li class="nav__item">
            <a href="#about" class="nav__link">About Us</a>
          </li>

          <li class="nav__item">
            <a href="#recently" class="nav__link">Contact</a>
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

  <!--==================== MAIN ====================-->
  <main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
      <div class="home__container container grid">
        <img src="images/1.png" alt="home image" class="home__img">

        <div class="home__data">
          <h1 class="home__title">
            <span style="font-family:Adidas;">We Make Your Move </span>
            <div>
              <!-- <img src="assets/img/home-sushi-title.png" alt="home image"> -->

            </div>
          </h1>
          <p class="home__description">
            Feeling good isn’t just about the products you wear, but what you choose to do and who you choose to be.
          </p>

          <a href="login.php" class="button">
            Order Now<i class="ri-arrow-right-line"></i>
          </a>
        </div>
      </div>

      <img src="images/outline-1.png" alt="home image" class="home__leaf-1">
      <img src="images/outline-2.png" alt="home image" class="home__leaf-2">
    </section>

    <!--==================== BRAND ====================-->
    <div class="our-clients">
      <ul>
        <li> <img src="images2/1.png" alt=""> <img src="images2/1-1.png" alt=""> </li>
        <li> <img src="images2/2.png" alt=""> <img src="images2/2-2.png" alt=""> </li>
        <li> <img src="images2/3.png" alt=""> <img src="images2/3-3.png" alt=""> </li>
        <li> <img src="images2/4.png" alt=""> <img src="images2/4-4.png" alt=""> </li>
        <li> <img src="images2/5.png" alt=""> <img src="images2/5-5.png" alt=""> </li>
        <li> <img src="images2/6.png" alt=""> <img src="images2/6-6.png" alt=""> </li>
      </ul>
      <!--==================== POPULAR ====================-->
      <section class="popular section" id="popular">
        <span class="section__subtitle">Best Collection</span>
        <h2 class="section__title">Popular Sneakers</h2>
        <?php
        $query = "select * from produk where tipe='popular'";
        $result = mysqli_query($conn, $query);
        $kolom = 3;
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
              <span class="popular__price">Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></span>
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
      <a href="more.php" class="button2">Lihat
        Selengkapnya</a>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <span class="section__subtitle">About Us</span>
            <h2 class="section__title about__title">
              <div>
                We Provide
                <!-- <img src="assets/img/about-sushi-title.png" alt=""> -->
              </div>
              Traditional Food
            </h2>

            <p class="about__description">
              Food comes to us from our relatives, whether they have wings or roots. This is how we consider food, it
              also
              has a culture. It has a history that passes from generation to generation.

            </p>
          </div>

          <img src="images/about.png" alt="" class="about__img">
        </div>

        <!-- <img src="assets/img/leaf-branch-1.png" alt="" class="about__leaf"> -->
      </section>
      <!--==================== NEWSLETTER ====================-->
      <section class="newsletter section">
        <div class="newsletter__container container">
          <div class="newsletter__content grid">
            <img src="images/subs.png" alt="" class="newsletter__img">
            <div class="newsletter__data">
              <span class="section__subtitle">NewsLetter</span>
              <h2 class="section__title">
                Subscribe For <br>
                Offer Updates
              </h2>

              <form action="" class="newsletter__form">
                <input type="email" placeholder="Enter E-mail" class="newsletter__input">
                <button class="button newsletter__button">
                  Subscribe<i class="ri-send-plane-line"></i>
                </button>
              </form>
            </div>
          </div>
          <img src="assets/img/spinach-leaf.png" alt="" class="newsletter__spinach">
        </div>
      </section>
  </main>

  <!--==================== CONTACT ====================-->
  <section class="recently section" id="recently" style="bottom:150px;">
    <div class="recently__container container grid">
      <div class="recently__img">
        <span class="section__subtitle">Contact Me</span>
        <h2 class="section__title">
          Sutanto Dwi Putra <br>
          <!-- Salmón Cheese -->
        </h2>
        <p class="recently__description">
          Halo Saya Mahasiswa Jurusan Teknik Informatika di STMIK Mardira Indonesia
          yang memiliki ketertarikan di bidang IT khususnya Programming dan memiliki pengalaman bekerja Desain Grafis di
          Perusahaan bidang Property.
        </p>
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

        <!-- <img src="assets/img/spinach-leaf.png" alt="" class="recently__data-img"> -->
      </div>
      <img src="images/contact.png" alt="" class="recently__data" width="100%">
    </div>
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