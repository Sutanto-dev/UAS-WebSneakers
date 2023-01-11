<?php
include '../koneksi.php';
$id_sepatu = $_GET["id_sepatu"];
$query = "DELETE FROM produk WHERE id_sepatu='$id_sepatu' ";
$hasil_query = mysqli_query($conn, $query);
if (!$hasil_query) {
  die("Gagal menghapus data: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  echo "<script>alert('Data berhasil dihapus.');window.location='produk.php';</script>";
}