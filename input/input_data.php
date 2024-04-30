<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAB CAFFE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5 pt-3">
        <div class="jumbotron">
            <h1 class="display-5">Masukan Data Penjualan</h1>
            <p class="lead"></p>
            <hr class="my-4">
    </div>
        <form action="proses.php" method="post">
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk:</label>
                <input type="text" name="nama_produk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk:</label>
                <input type="number" name="harga_produk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_produk" class="form-label">Jumlah Produk:</label>
                <input type="number" name="jumlah_produk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="note" class="form-label">Note :</label>
                <textarea type="text" name="note" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Penjualan</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript (Optional, only needed if you use Bootstrap components that require JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
