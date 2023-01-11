<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>Snikers - Login</title>
	<link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="kotak_login">
		<!-- <p class="tulisan_login">Silahkan login</p> -->
		<img src="images/logo1.png">
		<span>
			<?php
			if (isset($_GET['pesan'])) {
				$pesan = $_GET['pesan'];
				if ($pesan == 'gagal') {
					echo "<center><h8 style='color:red;'>Username Atau Password Salah !</h8></center>";
				}
			}
			?>
		</span>

		<form action="proses_login.php" method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required>

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required>

			<input type="submit" name="submit" class="tombol_login" value="LOGIN">

			<br />
			<br />
			<center>
				<p>
					Tidak Punya Akun? <a class="link" href="register.php">Daftar Disini!</a>
					<br><a class="link" href="index.php"><i>Kembali Ke Beranda</i></a>
				</p>
			</center>
		</form>

	</div>




</body>

</html>