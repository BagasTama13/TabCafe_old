<?php
include "koneksi.php";
require_once "fpdf184/fpdf.php";

// Initialize PDF
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

// Set font for title
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(180, 10, 'Laporan Keuangan TAB Caffe', 0, 1, 'C');

// Insert Image
$pdf->Image('../bg1.jpg', 10, 10, 20);

// Add space after image
$pdf->Ln(15);

// Set font for table headers
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(230, 230, 230); // Set background color for headers

// Table headers
$pdf->Cell(20, 7, 'ID', 1, 0, 'C', true);
$pdf->Cell(20, 7, 'Tanggal', 1, 0, 'C', true);
$pdf->Cell(60, 7, 'Nama Produk', 1, 0, 'C', true);
$pdf->Cell(25, 7, 'Harga', 1, 0, 'C', true);
$pdf->Cell(20, 7, 'Jumlah', 1, 0, 'C', true);
$pdf->Cell(35, 7, 'Total', 1, 1, 'C', true);

// Set font for table data
$pdf->SetFont('Arial', '', 10);

// Fetch data from database
$data = mysqli_query($koneksi, "SELECT * FROM penjualan");
$total_income = 0; // Variable to calculate total income

while ($d = mysqli_fetch_array($data)) {
    // Calculate total income
    $total_income += $d['total_harga'];

    // Output data into table cells
    $pdf->Cell(20, 6, $d['id'], 1, 0, 'C');
    $pdf->Cell(20, 6, date('d/m/Y', strtotime($d['tanggal_penjualan'])), 1, 0, 'C');
    $pdf->Cell(60, 6, $d['nama_produk'], 1, 0, 'L');
    $pdf->Cell(25, 6, 'Rp ' . number_format($d['harga_produk'], 0, ',', '.'), 1, 0, 'R');
    $pdf->Cell(20, 6, $d['jumlah_produk'], 1, 0, 'C');
    $pdf->Cell(35, 6, 'Rp ' . number_format($d['total_harga'], 0, ',', '.'), 1, 1, 'L');
}

// Add total income row
$pdf->Cell(145, 7, 'Total Pendapatan :', 1, 0, 'L');
$pdf->Cell(35, 7, 'Rp ' . number_format($total_income, 0, ',', '.'), 1, 1, 'L');

// Output PDF
$pdf->Output();
?>
