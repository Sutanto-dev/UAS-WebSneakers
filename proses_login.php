<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "select *from user where username='$username' and password='$password' ";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
  $cek = mysqli_num_rows($data);
  if ($cek > 0) {
    if ($result['level'] == 'admin') {
      $_SESSION['nama'] = $result['nama'];
      $_SESSION['level'] = $result['level'];
      header("location:admin/dashboard.php");
    } elseif ($result['level'] == 'customer') {
      $_SESSION['id'] = $result['id'];
      $_SESSION['nama'] = $result['nama'];
      $_SESSION['level'] = $result['level'];
      $_SESSION['alamat'] = $result['alamat'];
      $_SESSION['nohp'] = $result['nohp'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['jenis_kelamin'] = $result['jenis_kelamin'];
      header("location:customer/index_customers.php");
    } else {
      $_SESSION['nama'] = $result['nama'];
      $_SESSION['level'] = $result['level'];
      header("location:login.php?pesan=gagal");
    }
  } else {
    header("location:login.php?pesan=gagal");
  }
}
?>