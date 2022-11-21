<?php
include "../connect/koneksi.php";
session_start();
$nama = $_GET["nama"];
$tempat_lahir = $_GET["tempat_lahir"];
$tgl_lahir = $_GET["tgl_lahir"];
$gender = $_GET["gender"];
$golongan_darah = $_GET["golongan_darah"];
$agama = $_GET["agama"];
$status = $_GET["status"];
$pekerjaan = $_GET["pekerjaan"];
$alamat = $_GET["alamat"];
$rt = $_GET["rt"];
$rw = $_GET["rw"];
$kelurahan = $_GET["kelurahan"];
$kecamatan = $_GET["kecamatan"];
$kabupaten = $_GET["kabupaten"];
$provinsi = $_GET["provinsi"];
$nik_user = $_SESSION['nik'];
$kode_surat = $_GET["kode_surat"];
$tgl = $_GET["tgl"];

$tb_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT tb_pengajuan.id_pengajuan FROM tb_pengajuan WHERE tb_pengajuan.nik='$nik_user' AND tb_pengajuan.tgl_pengajuan='$tgl'"));
$id_pengajuan = $tb_pengajuan["id_pengajuan"];
$tambah =mysqli_query($koneksi,"INSERT INTO tb_spk (id_pengajuan_spk, kode_surat, nama_spk, tempat_lahir_spk, tgl_lahir_spk, gender_spk, golongan_darah_spk, agama_spk, status_spk, pekerjaan_spk, alamat_spk, rt_spk, rw_spk, kelurahan_spk, kecamatan_spk, kota_spk, provinsi_spk) VALUES ('$id_pengajuan', '$nik_user', '$kode_surat', '$nama', '$tempat_lahir', '$tgl_lahir', '$gender', '$golongan_darah', '$agama', '$status', '$pekerjaan', '$alamat', $rt, $rw, '$kelurahan', '$kecamatan', '$kabupaten', '$provinsi')");

if($tambah){
    $_SESSION["pesan"] = "sukses";
    echo 'Sukses';
    header("location: ../user/home.php");
}else{
    $_SESSION["pesan"] = "gagal";
    echo "Gagal";
    header("location: ../user/home.php");
}
?>