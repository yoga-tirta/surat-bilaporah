<?php
include "../connect/koneksi.php";
session_start();
$nama = $_GET["nama"];
$tempat_lahir = $_GET["tempat_lahir"];
$tgl_lahir = $_GET["tgl_lahir"];
$gender = $_GET["gender"];
$pekerjaan = $_GET["pekerjaan"];
$alamat = $_GET["alamat"];
$hari_meninggal = $_GET["hari_meninggal"];
$tgl_meninggal = $_GET["tgl_meninggal"];
$nik_user = $_SESSION['nik'];
$kode_surat = $_GET["kode_surat"];
$umur = $_GET["umur"];
$penyebab = $_GET["penyebab"];
$tgl = $_GET["tgl"];

$tb_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_pengajuan.id_pengajuan FROM tb_pengajuan WHERE tb_pengajuan.nik='$nik_user' AND tb_pengajuan.tgl_pengajuan='$tgl'"));
$id_pengajuan = $tb_pengajuan["id_pengajuan"];
$tambah = mysqli_query($koneksi, "INSERT INTO tb_skk(id_pengajuan_skk, kode_surat, nama_skk,tgl_lahir_skk, tempat_lahir_skk, gender_skk, pekerjaan_skk, alamat_skk, hari_meninggal_skk, tgl_meninggal_skk, umur_skk, penyebab_skk) 
                                            VALUES('$id_pengajuan', '$kode_surat', '$nama', '$tgl_lahir','$tempat_lahir', '$gender', '$pekerjaan', '$alamat', '$hari_meninggal', '$tgl_meninggal', '$umur', '$penyebab')");

if ($tambah) {
    $_SESSION["pesan"] = "sukses";
    header("location: ../user/home.php");
} else {
    $_SESSION["pesan"] = "gagal";
    header("location: ../user/home.php");
}
?>
