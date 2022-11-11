<?php
include "../connect/koneksi.php";
session_start();
$nama_ayah = $_GET["nama_ayah"];
$nama_ibu = $_GET["nama_ibu"];
$gender = $_GET["gender"];
$agama = $_GET["agama"];
$tempat_lahir = $_GET["tempat_lahir"];
$tgl_lahir = $_GET["tgl_lahir"];
$hubungan = $_GET["hubungan"];
$pekerjaan = $_GET["pekerjaan"];
$alamat = $_GET["alamat"];
$nama_anak = $_GET["nama_anak"];
$gender_anak = $_GET["gender_anak"];
$tempat_lahir_anak = $_GET["tempat_lahir_anak"];
$tgl_lahir_anak = $_GET["tgl_lahir_anak"];
$waktu_lahir = $_GET["waktu_lahir"];
$nik_user = $_SESSION['nik'];
$kode_surat = $_GET["kode_surat"];
$tgl = $_GET["tgl"];

$tb_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT tb_pengajuan.id_pengajuan FROM tb_pengajuan WHERE tb_pengajuan.nik='$nik_user' AND tb_pengajuan.tgl_pengajuan='$tgl'"));
$id_pengajuan = $tb_pengajuan["id_pengajuan"];
$tambah =mysqli_query($koneksi,"INSERT INTO tb_spa (id_pengajuan_spa, kode_surat, nama_ayah_spa, nama_ibu_spa, gender_spa, agama_spa, tempat_lahir_spa, tgl_lahir_spa, hubungan_spa, pekerjaan_spa, alamat_spa, nama_anak_spa, gender_anak_spa, tempat_lahir_anak_spa, tgl_lahir_anak_spa, waktu_lahir_anak_spa) 
                                            VALUES ('$id_pengajuan',  '$kode_surat', '$nama_ayah', '$nama_ibu', '$gender', '$agama', '$tempat_lahir', '$tgl_lahir', '$hubungan', '$pekerjaan', '$alamat', '$nama_anak', '$gender_anak', '$tempat_lahir_anak', '$tgl_lahir_anak', '$waktu_lahir')");

if($tambah){
    $_SESSION["pesan"] = "sukses";
    header("location: ../user/home.php");
}else{
    $_SESSION["pesan"] = "gagal";
    echo "Gagal";
    header("location: ../user/home.php");
}
?>
