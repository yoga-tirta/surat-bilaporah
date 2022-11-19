<?php
include "../connect/koneksi.php";
session_start();
$nama = $_GET["nama"];
$nama_sktm = $_GET['nama_sktm'];
$tempat_lahir = $_GET["tempat_lahir"];
$lahir = $_GET["lahir"];
$gender = $_GET["gender"];
$pekerjaan = $_GET["pekerjaan"];
$alamat = $_GET["alamat"];
// siswa
$nama_murid = $_GET["nama_murid"];
$tempat_lahir_murid = $_GET["tempat_lahir_murid"];
$tgl_lahir_murid = $_GET["tgl_lahir_murid"];
$gender_murid = $_GET["gender_murid"];
$agama_murid = $_GET["agama"];
$anak_murid = $_GET["anak_murid"];
$alamat_murid = $_GET["alamat_murid"];
$nisn = $_GET["nisn"];

$nik_user = $_SESSION["nik"];
$kode_surat = $_GET["kode_surat"];
$tgl = $_GET["tgl"];

$tb_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_pengajuan.id_pengajuan FROM tb_pengajuan WHERE tb_pengajuan.nik='$nik_user' AND tb_pengajuan.tgl_pengajuan='$tgl'"));
$id_pengajuan = $tb_pengajuan["id_pengajuan"];
$tambah = mysqli_query($koneksi, "INSERT INTO `tb_sktm` (`id_pengajuan_sktm`, `kode_surat`, `nama_sktm`, `tempat_lahir_sktm`, `tgl_lahir_sktm`, `gender_sktm`, `pekerjaan_sktm`, `alamat_sktm`, `nama_murid`, `tempat_lahir_murid`, `tgl_lahir_murid`, `gender_murid`, `agama`, `anak_murid`, `alamat_murid`, `nisn`) 
                                                    VALUES('$id_pengajuan', '$kode_surat', '$nama_sktm',         '$tempat_lahir',    '$lahir',       '$gender',      '$pekerjaan',      '$alamat',   '$nama_murid', '$tempat_lahir_murid', '$tgl_lahir_murid', '$gender_murid', '$agama_murid', '$anak_murid', '$alamat_murid', '$nisn')");
if ($tambah) {
    $_SESSION["pesan"] = "sukses";
    header("location: ../user/home.php");
} else {
    $_SESSION["pesan"] = "gagal";
    header("location: ../user/home.php");
}
