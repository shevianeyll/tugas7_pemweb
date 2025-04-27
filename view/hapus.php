<?php
 if($_GET['id_produk']){
    include "../model/Koneksi.php";
    $qry_hapus=mysqli_query($conn,"delete from produk where id_produk='".$_GET['id_produk']."'");
    if($qry_hapus){
        echo "<script>alert('Success delete this product');
        location.href='index.php';</script>"; //redirect ke halaman ()
    } else {
        echo "<script>alert('Failed delete this product');
        location.href='index.php';</script>";
    }
 }
?>