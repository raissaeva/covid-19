<?php
session_start();
session_destroy();
header('location:login.php');
header('location:on-'. $halaman);
    exit();
} else {
    header('location:login.php');
    exit();
?>
