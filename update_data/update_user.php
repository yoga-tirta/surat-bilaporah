<?php
session_start();
include "../connect/koneksi.php";
$nik = $_POST["nik"];
$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$up = ucfirst($nama);
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$gender = $_POST["gender"];
$agama = $_POST["agama"];
$alamat = $_POST["alamat"];

// memasukkan data kamar ke dalam database
$update = mysqli_query($koneksi, "UPDATE tb_user SET username='$username', password='$password', nama_user='$nama', tempat_lahir= '$tempat_lahir', tanggal_lahir= '$tanggal_lahir', gender= '$gender', agama='$agama', alamat='$alamat' WHERE tb_user.nik='$nik'");
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
