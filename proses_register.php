<?php

include('koneksi.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$jk = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$password = $_POST['password'];
// $tipe = $_POST['tipe'];


$query = "INSERT INTO user (nama, alamat, nohp, email, jenis_kelamin, username, password, tipe) VALUES ( '$nama', '$alamat', '$nohp', '$email', '$jk', '$username', '$password', 'customer')";


if ($conn->query($query)) {


  header("location: login.php");

} else {


  echo "Data Gagal Disimpan!";

}

?>