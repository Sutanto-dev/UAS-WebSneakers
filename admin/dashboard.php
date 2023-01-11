<?php
session_start();
include "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <title>Snikers - Dashboard</title>
  <link rel="shortcut icon" href="../images/logo2.png" type="image/x-icon">
</head>

<body>



  <!-- NAVBAR -->
  <section id="content">
    <!-- NAVBAR -->

    <!-- <form action="#">
        <div class="form-group">
          <img src="../images/landscape.png" width="150px" alt="">
        </div>
        
      </form> -->
    <header>
      <img src="../images/landscape.png" width="150px" alt="logo">
      <nav>
        <ul class="nav__links">
          <li><a href="dashboard.php">Beranda</a></li>
          <li><a href="produk.php">Produk</a></li>
          <li><a href="user.php">Data User</a></li>
          <li><a href="#">Transaksi</a></li>
        </ul>
      </nav>
      <p>
        <?php echo $_SESSION['nama']; ?> |
        <a href="logout_admin.php" style="color:#D22B2B;"> Logout</a>
      </p>
      <!-- <div style="position: relative;
  margin-right: 20px;">
        <img style="width: 36px; height: 36px;
  border-radius: 50%;
  object-fit: cover;
  cursor: pointer; " src="admin.jpg" alt=""> -->
      <!-- <ul class="profile-link">
        <li><a href="logout_admin.php"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
      </ul> -->
      </div>
    </header>
    <!-- <p class="nav-link">
      <?php echo $_SESSION['nama']; ?>
    </p>

    <div class="profile">
      <img src="admin.jpg" alt="">
      <ul class="profile-link">
        <li><a href="logout_admin.php"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
      </ul>
    </div> -->

    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <h1 class="title">Dashboard</h1>
      <ul class="breadcrumbs">
        <li><a href="#">Home</a></li>
        <li class="divider">/</li>
        <li><a href="#" class="active">Dashboard</a></li>
      </ul>
      <div class="info-data">
        <div class="card">
          <div class="head">
            <div>
              <h2>
                <?php
                $query = mysqli_query($conn, "select count(*) as total from produk");
                $hasil = mysqli_fetch_array($query);

                echo $hasil['total'];
                ?>
              </h2>
              <p>Data Sepatu</p>

            </div>

          </div>


    </main>
  </section>
  <!-- NAVBAR -->

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="script.js"></script>
</body>

</html>