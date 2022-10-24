<?php
include "../connect/koneksi.php";
session_start();
$user = $_SESSION["nik"];
session_destroy();
header('location: login.php');
?>