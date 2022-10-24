<?php
// digunakan untuk sesi setelah login agar tidak bisa kembali ke menu login
session_start();
if( !isset($_SESSION["username"])){ //jika tidak di temukan session login
    header("location: ../proses_login/login.php");
    exit;
}
