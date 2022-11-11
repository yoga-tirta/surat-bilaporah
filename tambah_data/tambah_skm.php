<?php
include "../connect/koneksi.php";
session_start();
$nama = $_GET["nama"];
$gender = $_GET["gender"];
$tempat_lahir = $_GET["tempat_lahir"];
$tgl_lahir = $_GET["tgl_lahir"];
$agama = $_GET["agama"];
$status = $_GET["status"];
$pekerjaan = $_GET["pekerjaan"];
$kewarganegaraan = $_GET["kewarganegaraan"];
$alamat = $_GET["alamat"];
$nama_pasangan = $_GET["nama_pasangan"];
$gender_pasangan = $_GET["gender_pasangan"];
$tempat_lahir_pasangan = $_GET["tempat_lahir_pasangan"];
$tgl_lahir_pasangan = $_GET["tgl_lahir_pasangan"];
$kewarganegaraan_pasangan = $_GET["kewarganegaraan_pasangan"];
$nik_user = $_SESSION['nik'];
$kode_surat = $_GET["kode_surat"];
$tgl = $_GET["tgl"];

$tb_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_pengajuan.id_pengajuan FROM tb_pengajuan WHERE tb_pengajuan.nik='$nik_user' AND tb_pengajuan.tgl_pengajuan='$tgl'"));
$id_pengajuan = $tb_pengajuan["id_pengajuan"];
$tambah = mysqli_query($koneksi, "INSERT INTO tb_skm(id_pengajuan_skm, kode_surat, nama_skm, gender_skm, tempat_lahir_skm, tgl_lahir_skm, agama_skm, status_skm, pekerjaan_skm, kewarganegaraan_skm, alamat_skm, nama_pasangan_skm, gender_pasangan_skm, tempat_lahir_pasangan_skm, tgl_lahir_, kewarganegaraan_pasangan_skm) 
                                            VALUES('$id_pengajuan', '$kode_surat', '$nama', '$gender', '$tempat_lahir', '$tgl_lahir', '$agama', '$status', '$pekerjaan', '$kewarganegaraan', '$alamat', '$nama_pasangan', '$gender_pasangan', '$tempat_lahir_pasangan', '$tgl_lahir_pasangan', '$kewarganegaraan_pasangan')"
                                            )
                                            ;

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
