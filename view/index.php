<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Produk_Admin.css">
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
    <title>List of Product</title>
</head>

<body>
    <?php
        include "header.php";
    ?>
    <!-- isi -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-2 mb-3 text-center">List of Product</h3>
                <form method="POST" action="Produk.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form><br>
            </div>
            <div class="card-body">
                <a href="tambah.php" class="btn btn-outline-danger">Add New Product</a>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>PHOTO</th>
                            <th>NAME OF PRODUCT</th>
                            <th>NAME OF BRAND</th>
                            <th>PRICE</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../model/Koneksi.php";
                        global $conn;
                        if (isset($_POST['cari'])) {
                            $cari = $_POST['cari'];
                            $query_produk = mysqli_query($conn, "select * from produk where id_produk = '$cari' or nama_produk like '%$cari%' or merek like '$cari'");
                        } else {
                            $query_produk = mysqli_query($conn, "select * from produk");
                        }
                        $no = 0;
                        while ($data_produk = mysqli_fetch_array($query_produk)) {
                            $no++;
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><img src="../img/<?= $data_produk['foto_produk']; ?>" width="50px" </td>
                                <td><?= $data_produk['nama_produk'] ?></td>
                                <td><?= $data_produk['merek'] ?></td>
                                <td>$<?= $data_produk['harga'] ?>.00</td>
                                <td width="700px"><?= $data_produk['deskripsi'] ?></td>
                                <td>
                                    <a href="ubah.php?id_produk=<?= $data_produk['id_produk'] ?>"
                                        class="btn btn-outline-success">Edit</a>
                                    <a href="hapus.php?id_produk=<?= $data_produk['id_produk'] ?>"
                                        class="btn btn-outline-danger"
                                        onclick="return confirm('Are you sure want to delete this product?')">Delete</a>
                                </td> <!-- onclick digunakan agar ketika tombol dipencet muncul konfirmasi sbb -->
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html><br>
<?php
    include "footer.php";
?>