<?php
require_once 'Koneksi.php';

class Produk {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    // Tambahkan fungsi CRUD disini jika diperlukan
}
?>