<?php
session_start();
if (isset($_SESSION['login'])) {
    unset($_SESSION);
    session_destroy();
    //
    echo "<script>alert('Logout Berhasil !!!');</script>";
    echo "<h2> Klik <a href='index.php'>Di Sini </a> untuk LOGIN kembali </h2>";
}
