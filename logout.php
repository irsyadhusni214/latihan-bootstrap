<?php
session_start();
if (isset($_SESSION['login'])) {
    unset($_SESSION);
    session_destroy();
    //
    echo "<h1>Anda Sudah Berhasil Logout</h1>";
    echo "<h2>Klik <a href='log.php'>Disini</a>Untuk Login Kembali</h2>";
}
?>