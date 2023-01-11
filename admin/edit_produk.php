<?php
session_start();
include "../koneksi.php";

if (isset($_GET['id_sepatu'])) {
  $id_sepatu = ($_GET["id_sepatu"]);
  $query = "SELECT * FROM produk WHERE id_sepatu='$id_sepatu'";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Query Error: " . mysqli_errno($conn) .
      " - " . mysqli_error($conn));
  }
  $data = mysqli_fetch_assoc($result);
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan pada 
 database');window.location='produk.php';</script>";
  }
} else {

}

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
      <h1 class="title">Edit Data</h1>
      <ul class="breadcrumbs">
        <li><a href="#">Admin</a></li>
        <li class="divider">/</li>
        <li><a href="#" class="active">Dashboard</a></li>
      </ul>
      <div class="info-data">
        <div class="card">
          <div class="head">

            <table class="table1">
              <div class="kotak_login">
                <!-- <p class="tulisan_login">Silahkan login</p> -->
                <form action="proses_edit_produk.php" method="POST" enctype="multipart/form-data">
                  <label>ID</label>
                  <input type="text" name="id_sepatu" class="form_login" value="<?php echo $data['id_sepatu']; ?>">


                  <label>Nama Sepatu</label>
                  <input type="text" name="nama_sepatu" class="form_login" value="<?php echo $data['nama_sepatu']; ?>">

                  <label>Brand</label>
                  <select class="form_login" name="brand" value="<?php echo $data['brand']; ?>">
                    <option value="Adidas">Adidas</option>
                    <option value="Converse">Converse</option>
                    <option value="New Balance">New Balance</option>
                    <option value="Nike">Nike</option>
                    <option value="Puma">Puma</option>
                    <option value="Reebok">Reebok</option>
                    <option value="Vans">Vans</option>
                  </select>

                  <label>Harga</label>
                  <input type="text"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                    name="harga" class="form_login" value="<?php echo $data['harga']; ?>">

                  <label>Gambar Sepatu</label>
                  <input type="file" name="gambar_sepatu" class="form_login">
                  <img src="../images/<?php echo $data['gambar_sepatu']; ?>"
                    style="width: 120px;float: left;margin-bottom: 5px;">
                  <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>

                  <input type="submit" class="tombol_login" value="Simpan">

                  <br />
                  <br />


                </form>

              </div>

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