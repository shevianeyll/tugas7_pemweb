<?php
include "header.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $temp = $_FILES['foto_produk']['tmp_name'];
    $type = $_FILES['foto_produk']['type'];
    $size = $_FILES['foto_produk']['size'];
    $name = rand(0,9999).$_FILES['foto_produk']['name'];
    $folder = "../img/";

    include "../model/Koneksi.php";

    // Validasi ukuran dan tipe file
    if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png' or $type == 'image/jpg')) {
        move_uploaded_file($temp, $folder.$name);
        $input = mysqli_query($conn, "INSERT INTO produk (nama_produk, deskripsi, kategori, merek, harga, foto_produk) VALUES ('".$nama_produk."','".$deskripsi."','".$kategori."','".$merek."','".$harga."','".$name."')");
        if ($input) {
            echo "<script>alert('Berhasil Menambahkan produk');location.href='index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Gagal Menambahkan produk');location.href='index.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('File harus berupa gambar JPEG/PNG dan maksimal 2MB');</script>";
    }
}
?><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h3>Add New Product</h3>
        <form method="post" enctype="multipart/form-data">
            Name of Product :
            <input type="text" name="nama_produk" value="" class="form-control" placeholder="Input Name of Product"
                required>
            Description :
            <input type="text" name="deskripsi" value="" class="form-control" placeholder="Input Description" required>
            Category :
            <input type="text" name="kategori" value="" class="form-control" placeholder="Input Category" required>
            Name of Brand :
            <input type="text" name="merek" value="" class="form-control" placeholder="Input Name of Brand" required>
            Price :
            <input type="text" name="harga" value="" class="form-control" placeholder="Input Price" required>
            Photo :
            <input type="file" name="foto_produk" value="" class="form-control" required><br>
            <input type="submit" name="simpan" value="Save" class="btn btn-outline-danger">
        </form>
    </div>
</div>
<?php
    include "footer.php";
?>