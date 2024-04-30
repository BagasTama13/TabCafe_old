<?php include "header.php"?>
<body>
    <?php include 'navbar.php'; ?>

    
    <div style="display: flex;" >

    <div class="container mt-4 col-md-4">
        <?php
        include 'koneksi.php';

        $sqlBarang = "SELECT * FROM barang";
        $result = $koneksi->query($sqlBarang);


        
        if ($result->num_rows > 0) {
            echo "<h2 class='text-center'>Drink</h2>";
            echo "<table class='bg-light table-bordered' >
                    <thead>
                        <tr class='bg-secondary'>
                            <th class='col-md-2 text-center'>ID</th>
                            <th class='text-center col-md-5'>Nama Produk</th>
                            <th class='text-centercol-md-4'>Harga Barang</th>
                            
                        <th class='container col-md-2'><form action='food/delete1.php' method='post'  ' >
                        <div><input type='text' name='id' placeholder='id' class='form-control mb-1 mt-1 text-center'><input class='mb-1' type='submit' value='Hapus'></div></form></th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class='text-center'>{$row['id']}</td>
                        
                        <td class='text-center'>{$row['nama_produk']}</td>
                        <td class='text-center'>Rp.{$row['harga_barang']}</td>
                        
                        
                    </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-info' role='alert'>Tidak ada data barang.</div>";
        }

        $koneksi->close();
        ?>
    </div>


    
    <div class="container mt-4 col-md-4">
        <?php
        include 'koneksi.php';

        $sqlBarang = "SELECT * FROM barang1";
        $result = $koneksi->query($sqlBarang);


        
        if ($result->num_rows > 0) {
            echo "<h2 class='text-center'>Food</h2>";
            echo "<table class='bg-light table-bordered' >
                    <thead>
                        <tr class='bg-secondary'>
                            <th class='col-md-2 text-center'>ID</th>
                            <th class='text-center col-md-5'>Nama Produk</th>
                            <th class='text-centercol-md-4'>Harga Barang</th>
                            
                        <th class='container col-md-2'><form action='food/delete1.php' method='post'  ' >
                        <div><input type='text' name='id' placeholder='id' class='form-control mb-1 mt-1 text-center'><input class='mb-1' type='submit' value='Hapus'></div></form></th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class='text-center'>{$row['id']}</td>
                        
                        <td class='text-center'>{$row['nama_produk']}</td>
                        <td class='text-center'>Rp.{$row['harga_barang']}</td>
                        
                        
                    </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-info' role='alert'>Tidak ada data barang.</div>";
        }

        $koneksi->close();
        ?>
    </div>


    
    <div class="container mt-4 col-md-4">
        <?php
        include 'koneksi.php';

        $sqlBarang = "SELECT * FROM barang2";
        $result = $koneksi->query($sqlBarang);


        
        if ($result->num_rows > 0) {
            echo "<h2 class='text-center'>Frozzen</h2>";
            echo "<table class='bg-light' >
                    <thead>
                        <tr class='bg-secondary'>
                            <th class='col-md-2 text-center'>ID</th>
                            <th class='text-center col-md-5'>Nama Produk</th>
                            <th class='text-centercol-md-4'>Harga Barang</th>
                            
                        <th class='container col-md-2'><form action='food/delete1.php' method='post'  ' >
                        <div><input type='text' name='id' placeholder='id' class='form-control mb-1 mt-1 text-center'><input class='mb-1' type='submit' value='Hapus'></div></form></th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class='text-center'>{$row['id']}</td>
                        
                        <td class='text-center'>{$row['nama_produk']}</td>
                        <td class='text-center'>Rp.{$row['harga_barang']}</td>
                        
                        
                    </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-info' role='alert'>Tidak ada data barang.</div>";
                }

        $koneksi->close();
        ?>
    </div>
    </div>
    

    <!-- Bootstrap JavaScript (Optional, only needed if you use Bootstrap components that require JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
