<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(180, 10, 'DATA PRODUK', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
$pdf->Cell(75, 7, 'NAMA SEPATU', 1, 0, 'C');
$pdf->Cell(30, 7, 'BRAND', 1, 0, 'C');
$pdf->Cell(25, 7, 'HARGA', 1, 1, 'C');

$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($conn, "SELECT  * FROM produk");
while ($d = mysqli_fetch_array($data)) {
  $pdf->Cell(10, 6, $no++, 1, 0, 'C');
  $pdf->Cell(75, 6, $d['nama_sepatu'], 1, 0);
  $pdf->Cell(30, 6, $d['brand'], 1, 0);
  $pdf->Cell(25, 6, $d['harga'], 1, 1);
}

$pdf->Output();

?>