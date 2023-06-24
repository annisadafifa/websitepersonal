<?php
session_start();
session_destroy();
$_SESSION[] = "";
echo "<script>alert('Logout berhasil');window.location.replace('indexdinamis.php');</script>";
