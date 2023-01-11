<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Snikers - Register</title>
  <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


  <div class="kotak_login">
    <!-- <p class="tulisan_login">Silahkan login</p> -->
    <img src="images/logo1.png">
    <?php
    $query = "select * from user";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
      echo '<center><tr><td colspan="8">TIDAK ADA DATA !!</td></tr></center>';
    }
    $no = 1;
    ?>

    <?php while ($data = mysqli_fetch_array($result)) {
      ?>
      <form action="proses_register.php" method="POST">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form_login" placeholder="Nama Lengkap ..">

        <label>Alamat</label>
        <input type="text" name="alamat" class="form_login" placeholder="Alamat ..">

        <label>No.HP</label>
        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
          name="nohp" class="form_login" placeholder="No.HP ..">

        <label>E-mail</label>
        <input type="email" name="email" class="form_login" placeholder="E-Mail ..">

        <label>Jenis Kelamin</label>
        <select class="form_login" name="jenis_kelamin">
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>

        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username ..">

        <label>Password</label>
        <input type="text" name="password" class="form_login" placeholder="Password ..">

        <input type="submit" class="tombol_login" value="DAFTAR">

        <br />
        <br />
        <?php
        $no++;
    }
    ?>
      <center>
        <p>
          Sudah Punya Akun? <a class="link" href="login.php">Login Disini!</a>
          <br><a class="link" href="index.php"><i>Kembali Ke Beranda</i></a>
        </p>
      </center>
    </form>

  </div>




</body>

</html>