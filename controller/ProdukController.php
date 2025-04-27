<?php
class ProdukController extends App {
    public function index() {
        $this->view('index');
    }

    public function tambah() {
        $this->view('tambah');
    }

    public function ubah($id) {
        $this->view('ubah');
    }

    public function hapus($id) {
        $this->view('hapus');
    }
}
?>