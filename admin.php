<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION["username"])) {
    header("Location: login.php?pesan=belum_login");
    exit();
}

// Periksa apakah ada aksi logout
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: login.php?pesan=logout");
    exit();
}

// Arahkan pengguna ke halaman "indexadmin.php"
header("Location: indexadmin.php");
exit();
?>