<?php

include '../koneksi.php';
$id = $_POST['id_sepatu'];
$nama_sepatu = $_POST['nama_sepatu'];
$brand = $_POST['brand'];
$harga = $_POST['harga'];
$gambar_sepatu = $_FILES['gambar_sepatu']['name'];
//cek dulu jika merubah gambar sepatu jalankan coding ini
if ($gambar_sepatu != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_sepatu); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_sepatu']['tmp_name'];
  $angka_acak = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar_sepatu;
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../images/' . $nama_gambar_baru);

    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query = "UPDATE produk SET nama_sepatu = '$nama_sepatu', brand = '$brand', 
harga = '$harga', gambar_sepatu = '$nama_gambar_baru'";
    $query .= "WHERE id_sepatu = '$id'";
    $result = mysqli_query($conn, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($conn) .
        " - " . mysqli_error($conn));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data dan Foto berhasil diubah.');window.location='produk.php';</script>";
    }
  } else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau 
png.');window.location='tambah_data_produk.php';</script>";
  }
} else {
  // jalankan query UPDATE berdasarkan ID yang produknya kita edit
  $query = "UPDATE produk SET nama_sepatu = '$nama_sepatu', brand = '$brand', harga = 
'$harga'";
  $query .= "WHERE id_sepatu = '$id'";
  $result = mysqli_query($conn, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($conn) .
      " - " . mysqli_error($conn));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil diubah.');window.location='produk.php';</script>";
  }

}