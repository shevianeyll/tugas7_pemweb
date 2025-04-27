<?php
$conn = mysqli_connect('localhost', 'root', '', 'tugas6_pemweb');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>