<?php
include "../connect/koneksi.php";
session_start();
$nama = $_GET["nama"];
$tempat_lahir = $_GET["tempat_lahir"];
$lahir = $_GET["lahir"];
$gender = $_GET["gender"];
$status = $_GET["status"];
$pekerjaan = $_GET["pekerjaan"];
$alamat = $_GET["alamat"];
$nik_user = $_SESSION["nik"];
$kode_surat = $_GET["kode_surat"];
$tgl = $_GET["tgl"];

$tb_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_pengajuan.id_pengajuan FROM tb_pengajuan WHERE tb_pengajuan.nik='$nik_user' AND tb_pengajuan.tgl_pengajuan='$tgl'"));
$id_pengajuan = $tb_pengajuan["id_pengajuan"];
$tambah = mysqli_query($koneksi, "INSERT INTO tb_sktm (id_pengajuan_sktm, kode_surat, nama_sktm, tempat_lahir_sktm, tgl_lahir_sktm, gender_sktm, status_sktm, pekerjaan_sktm, alamat_sktm) 
VALUES('$id_pengajuan', '$nik_user', '$kode_surat', '$tempat_lahir', '$lahir', '$gender', '$status', '$pekerjaan', '$alamat')");
if ($tambah) {
    $_SESSION["pesan"] = "sukses";
    header("location: ../user/home.php");
} else {
    $_SESSION["pesan"] = "gagal";
    header("location: ../user/home.php");
}
