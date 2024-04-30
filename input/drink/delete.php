<?php
// Menyertakan file koneksi.php
include "../koneksi.php";

// Ambil ID yang akan dihapus dari form
$id = $_POST['id'];

// SQL untuk menghapus data berdasarkan ID
$sql = "DELETE FROM barang WHERE id = ?";

// Menggunakan prepared statement untuk mencegah SQL injection
$stmt = $koneksi->prepare($sql);

// Periksa apakah prepared statement berhasil dibuat
if ($stmt === false) {
    die("Error in prepared statement: " . $koneksi->error);
}

$stmt->bind_param("i", $id);

// Periksa apakah bind_param berhasil
if ($stmt === false) {
    die("Error in bind_param: " . $stmt->error);
}

if ($stmt->execute()) {
    header ("location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
}

// Tutup prepared statement dan koneksi
$stmt->close();
$koneksi->close();
?>
