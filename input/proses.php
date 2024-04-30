<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $jumlah_produk = $_POST['jumlah_produk'];
    $total_harga = $harga_produk * $jumlah_produk;
    $tanggal_penjualan = date('Y-m-d');

    // Simpan data penjualan
    $sqlPenjualan = "INSERT INTO penjualan (nama_produk, harga_produk, jumlah_produk, total_harga, tanggal_penjualan)
                    VALUES ('$nama_produk', $harga_produk, $jumlah_produk, $total_harga, '$tanggal_penjualan')";

    if ($koneksi->query($sqlPenjualan) === TRUE) {
        header ("location: data_penjualan.php");
        echo '<div class="container mt-4 alert alert-success" role="alert">Data penjualan berhasil ditambahkan.</div>';
    } else {
        echo '<div class="container mt-4 alert alert-danger" role="alert">Error inserting penjualan data: ' . $koneksi->error . '</div>';
    }
}

$koneksi->close();
?>
