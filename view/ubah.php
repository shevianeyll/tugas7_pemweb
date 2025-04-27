<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_produk = $_POST["id_produk"];
    $nama_produk = $_POST["nama_produk"];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];

    include "../model/Koneksi.php";
    if ($_FILES['foto_produk']['tmp_name']) {
        $temp = $_FILES['foto_produk']['tmp_name'];
        $type = $_FILES['foto_produk']['type'];
        $size = $_FILES['foto_produk']['size'];
        $name = rand(0, 9999) . $_FILES['foto_produk']['name'];
        $folder = "../img/";

        if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) {
            $query_foto = mysqli_query($conn, "SELECT * FROM produk where id_produk = '" . $_POST['id_produk'] . "'");
            $data_foto = mysqli_fetch_array($query_foto);
            unlink('../img/' . $data_foto['foto_produk']); //remove foto yang ada difolder lalu diganti foto yang baru diup

            move_uploaded_file($temp, $folder . $name);
            $input = mysqli_query($conn, "UPDATE produk SET 
                nama_produk='" . $nama_produk . "', deskripsi='" . $deskripsi . "',
                kategori='" . $kategori . "',merek='" . $merek . "',harga='" . $harga . "', foto_produk='" . $name . "'
                where id_produk='" . $id_produk . "'");

            if ($input) {
                echo "<script>alert('Success to Edit This Product');location.href='index.php';</script>";
            } else {
                echo "<script>alert('Failed Edit this Product');location.href='index.php';</script>";
            }
        }
    } else {
        $input = mysqli_query($conn, "UPDATE produk SET 
            nama_produk='" . $nama_produk . "', deskripsi='" . $deskripsi . "',
            kategori='" . $kategori . "',merek='" . $merek . "',harga='" . $harga . "', foto_produk='" . $name . "'
            where id_produk='" . $id_produk . "'");

        if ($input) {
            echo "<script>alert('Success to Edit This Product');location.href='index.php';</script>";
        } else {
            echo "<script>alert('Failed Edit this Product');location.href='index.php';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah produk</title>
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header.php";
        include "../model/Koneksi.php";
        $query_produk = mysqli_query($conn, "select * from produk where id_produk='".$_GET['id_produk']."'"); //get=karena datanya mengambil dr url
        $data_produk = mysqli_fetch_array($query_produk); //diubah ke array assosiatif dan numerik
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Edit Product</h1>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_produk" value="<?=$data_produk['id_produk']?>">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Name of Product</label>
                        <input type="text" class="form-control" name="nama_produk" value="<?=$data_produk['nama_produk']?>" placeholder="Input Name of Product" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Description</label>
                        <input type="text" class="form-control" name="deskripsi" value="<?=$data_produk['deskripsi']?>" placeholder="Input Description of Product" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Category</label>
                        <input type="text" class="form-control" name="kategori" value="<?=$data_produk['kategori']?>" placeholder="Input Category of Product" required>
                    </div>
                    <div class="mb-3">
                        <label for="merek" class="form-label">Name of Brand</label>
                        <input type="text" class="form-control" name="merek" value="<?=$data_produk['merek']?>" placeholder="Input Name of Brand" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Price</label>
                        <input type="text" class="form-control" name="harga" value="<?=$data_produk['harga']?>" placeholder="Input Price of Brand" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto_produk" class="form-label">Photo</label>
                        <img src="../img/<?=$data_produk['foto_produk']?>" width="100"/></br>
                        <input type="file" class="form-control" name="foto_produk" value="<?=$data_produk['foto_produk']?>">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>