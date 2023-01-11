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
  <title>Snikers - Produk</title>
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
      </div>
    </header>
    <!-- <p class="nav-link">
      <?php echo $_SESSION['nama']; ?>
    </p>

     NAVBAR -->


    <!-- MAIN -->
    <main>
      <h1 class="title">Produk</h1>
      <ul class="breadcrumbs">
        <li><a href="#">Admin</a></li>
        <li class="divider">/</li>
        <li><a href="#" class="active">Dashboard</a></li>
      </ul>
      <div class="info-data">
        <div class="card">
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
            <input style="margin-left: 690px;" value="<?php if (isset($_GET['search'])) {
              echo $_GET['search'];
            } ?>" name="search" type="text" placeholder=" Search...">
            <input type="submit" class="btn-tambah" value="Pilih"> <br>
            <?php
            if (isset($_GET['search'])) {
              $search = $_GET['search'];
              $query = "select * from produk where id_sepatu like '%" . $search . "%' or nama_sepatu like '%" . $search . "%' or brand like '%" . $search . "%' order by id_sepatu asc";

            } else {
              $query = "select * from produk order by id_sepatu asc";
            }
            $result = mysqli_query($conn, $query);

            if (!$result) {
              die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
            }
            //kalau ini melakukan foreach atau perulangan
            while ($data = mysqli_fetch_assoc($result)) {

              ?>


              <div class="head">

                <table class="table1">
                  <tr>
                    <th>ID Sepatu</th>
                    <th>Nama Sepatu</th>
                    <th>Brand</th>
                    <th>Harga</th>
                    <th>Gambar Sepatu</th>

                  </tr>

                  <tr>
                    <td>
                      <?php echo $data['id_sepatu']; ?>
                    </td>
                    <td>
                      <?php echo $data['nama_sepatu']; ?>
                    </td>
                    <td>
                      <?php echo $data['brand']; ?>
                    </td>
                    <td>Rp.
                      <?php echo number_format($data['harga'], 0, ',', '.'); ?>
                    </td>
                    <td style="text-align: center;"><img src="../images/<?php echo
                      $data['gambar_sepatu']; ?>" style="width: 120px;"></td>
                    <!-- <td><a href="edit_produk.php?id_sepatu=<?php echo $data['id_sepatu']; ?>" class="btn-edit">Edit</a>
                                  <a href="hapus_produk.php?id_sepatu=<?php echo $data['id_sepatu']; ?>" class="btn-hapus">Hapus</a>
                                </td> -->
                  </tr>
                  <?php


            }
            ?>
              </table>

            </div>

        </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- NAVBAR -->

  <script src="script.js"></script>
</body>

</html>