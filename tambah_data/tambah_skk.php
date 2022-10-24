<?php
include "../connect/koneksi.php";
session_start();
$nama = $_GET["nama"];
$tempat_lahir = $_GET["tempat_lahir"];
$tgl_lahir = $_GET["tgl_lahir"];
$gander = $_GET["gander"];
$pekerjaan = $_GET["pekerjaan"];
$alamat = $_GET["alamat"];
$hari_meninggal = $_GET["hari_meninggal"];
$tgl_meninggal = $_GET["tgl_meninggal"];
$nik_user = $_SESSION['nik'];
$kode_surat = $_GET["kode_surat"];
$tgl = $_GET["tgl"];

$tb_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT tb_pengajuan.id_pengajuan FROM tb_pengajuan WHERE tb_pengajuan.nik_user='$nik_user' AND tb_pengajuan.waktu_pengajuan='$tgl'"));
$id_pengajuan = $tb_pengajuan["id_pengajuan"];
$tambah =mysqli_query($koneksi,"INSERT INTO tb_skk (id_pengajuan_skk, nik_user, kode_surat, nama, tempat_lahir, tgl_lahir, gender, pekerjaan, alamat, hari_meninggal, tgl_meninggal) 
VALUES('$id_pengajuan', '$nik_user', '$kode_surat', '$nama', '$tempat_lahir', '$tgl_lahir', '$gender', '$pekerjaan', '$alamat', '$hari_meninggal', '$tgl_meninggal')");

if($tambah){
    $_SESSION["pesan"] = "sukses";
    header("location: ../user/home.php");
}else{
    $_SESSION["pesan"] = "gagal";
    echo "Gagal";
    header("location: ../user/home.php");
}
?>