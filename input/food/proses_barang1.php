

<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_produk = $_POST['nama_produk'];
    
    $harga_barang = $_POST['harga_barang'];

    $sqlInsertBarang = "INSERT INTO barang1 (nama_produk, harga_barang)
                       VALUES ('$nama_produk', $harga_barang)";

    if ($koneksi->query($sqlInsertBarang) === TRUE) {
        echo "Data barang berhasil ditambahkan.";
        header ("location: ../barang.php");
    } else {
        echo "Error inserting barang data: " . $koneksi->error;
    }
}

$koneksi->close();
?>
