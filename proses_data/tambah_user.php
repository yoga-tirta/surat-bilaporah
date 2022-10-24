<?php
include "../connect/koneksi.php";
session_start();
$nik = $_POST["nik"];
$username = $_POST["username"];
$password = $_POST["password"];

$cek_user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE nik='$nik'");

if (mysqli_num_rows($cek_user)) {
    $inp_data = mysqli_query($koneksi, "UPDATE tb_user SET username = '$username', password = '$password' where tb_user.nik = '$nik'");
    if ($inp_data) {
        header("location: ../input_data/input_user.php");
        $_SESSION["pesan"] = "sukses";
    } else {
        header("location: ../input_data/input_user.php");
        $_SESSION["pesan"] = "gagal";
        echo "Gagal";
    }
} else {
    header("location: ../input_data/input_user.php");
    $_SESSION["pesan"] = "gagal";
}
