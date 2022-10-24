<?php
session_start();
include "../connect/koneksi.php";
$nik = $_POST["nik"];
$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$up = ucfirst($nama);
$rt = $_POST["rt"];
$rw = $_POST["rw"];

// memasukkan data kamar ke dalam database
$update = mysqli_query($koneksi, "UPDATE tb_user SET username='$username', password='$password', nama_user='$nama', rt= $rt, rw= $rw WHERE tb_user.nik='$nik'");
// cek data berhasil di masukkan atau tidak
if ($update) {
    header("location: ../admin/user.php");
    $_SESSION["pesan"] = "sukses1";
    echo "Berhasil1";
} else {
    header("location: ../admin/user.php");
    $_SESSION["pesan"] = "gagal";
    echo "Gagal2";
}
