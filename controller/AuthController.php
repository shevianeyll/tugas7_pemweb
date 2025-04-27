<?php
class AuthController extends App {
    public function index() {
        $this->view('login');
    }

    public function logout() {
        $this->view('logout');
    }
}
?>