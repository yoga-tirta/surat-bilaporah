<?php
include "../connect/koneksi.php";
session_start();
$nama = $_GET["nama"];
$tempat_lahir = $_GET["tempat_lahir"];
$tgl_lahir = $_GET["tgl_lahir"];
$gender = $_GET["gender"];
$agama = $_GET["agama"];
$status = $_GET["status"];
$pekerjaan = $_GET["pekerjaan"];
$no_hp = $_GET["no_hp"];
$alamat = $_GET["alamat"];
$nik_user = $_SESSION['nik'];
$kode_surat = $_GET["kode_surat"];
$tgl = $_GET["tgl"];
$ktp = $_GET["ktp"];
$kk = $_GET["kk"];

$tb_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT tb_pengajuan.id_pengajuan FROM tb_pengajuan WHERE tb_pengajuan.nik_user='$nik_user' AND tb_pengajuan.waktu_pengajuan='$tgl'"));
$id_pengajuan = $tb_pengajuan["id_pengajuan"];
$tambah =mysqli_query($koneksi,"INSERT INTO tb_sl (id_pengajuan_sl, nik_user, kode_surat, nama, tempat_lahir, tgl_lahir, gender, agama, status, pekerjaan, no_hp, alamat, foto_ktp, foto_kk) 
VALUES('$id_pengajuan', '$nik_user', '$kode_surat', '$nama', '$tempat_lahir', '$tgl_lahir', '$gender', '$agama', '$status', '$pekerjaan', '$no_hp', '$alamat', '$ktp', '$kk')");

if($tambah){
    $_SESSION["pesan"] = "sukses";
    header("location: ../user/home.php");
}else{
    $_SESSION["pesan"] = "gagal";
    echo "Gagal";
    header("location: ../user/home.php");
}
?>