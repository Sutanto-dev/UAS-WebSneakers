<?php

include('../koneksi.php');

$nama = $_POST['nama_sepatu'];
$brand = $_POST['brand'];
$harga = $_POST['harga'];
$gambar_sepatu = $_FILES['gambar_sepatu']['name'];
if ($gambar_sepatu != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_sepatu);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_sepatu']['tmp_name'];
  $angka_acak = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar_sepatu;
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../images/' . $nama_gambar_baru);
  }

}


$query = "INSERT INTO produk (nama_sepatu, brand, harga, gambar_sepatu) VALUES ( '$nama','$brand', '$harga', '$nama_gambar_baru')";


if ($conn->query($query)) {


  header("location: produk.php");

} else {


  echo "Data Gagal Disimpan!";

}

?>