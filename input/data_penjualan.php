<?php include "header.php"?>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5 pt-3 col-md-12">


        <div class="jumbotron">
            <h1 class="display-5">Data Penjualan</h1>
            <p class="lead"></p>
            <hr class="my-4">
        </div>

        <div> 
            <a href="export.php" target="_balnk" class="btn btn-success ">Export</a>
        </div>

        <?php
        include 'koneksi.php';

        $sqlPenjualan = "SELECT * FROM penjualan";
        $resultPenjualan = $koneksi->query($sqlPenjualan);

        if ($resultPenjualan->num_rows > 0) {
            
            echo "<table class='table table-bordered bg-light text-center  '>
            
                    <thead>
                        <tr class='bg-secondary'>
                            <th class='col-md-1' >ID</th>
                            <th class='col-md-4'>Nama Produk</th>
                            <th class='col-md-2'>Harga Produk</th>
                            <th class='col-md-1'>Jumlah Produk</th>
                            <th class='col-md-2'>Total Harga</th>
                            <th class='col-md-2'>Tanggal Penjualan</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $resultPenjualan->fetch_assoc()) {
                echo "<tr style='height: 50px;'>
                        <td>{$row['id']}</td>
                        <td>{$row['nama_produk']}</td>
                        <td>Rp.{$row['harga_produk']}</td>
                        <td>{$row['jumlah_produk']}</td>
                        <td>Rp.{$row['total_harga']}</td>
                        <td>{$row['tanggal_penjualan']}</td>
                        
                    </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-info' role='alert'>Tidak ada data penjualan.</div>";
        }

        $koneksi->close();
        ?>
    </div>
    <!-- Bootstrap JavaScript (Optional, only needed if you use Bootstrap components that require JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
