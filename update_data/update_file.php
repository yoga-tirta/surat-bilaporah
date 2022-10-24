<?php
include "../connect/koneksi.php";
session_start();
$id_pengajuan = $_GET["id_pengajuan"];
$jenis_surat = $_GET["jenis_surat"];
$nama = $_GET["nama"];
$kode_surat = $_GET["kode_surat"];
$nama_file = $_FILES["file"]["name"];
$size = $_FILES["file"]["size"];
$lokasi = $_FILES["file"]["tmp_name"];
$error = $_FILES["file"]["error"];
$pemisah = explode('.', $nama_file);
$ekstention = strtolower(end($pemisah));
$namaBaru = $id_pengajuan . '-' . $nama . '-' . $jenis_surat . '.' . $ekstention;

$data_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_pengajuan.jenis_pengajuan FROM tb_pengajuan where tb_pengajuan.id_pengajuan = $id_pengajuan"));

if (in_array($ekstention, ['doc', 'docx', 'pdf']) and $size <= 10000000 and $error == 0) {
    if (move_uploaded_file($lokasi, "../surat_keluar/" . $namaBaru)) {
        if ($data_pengajuan['jenis_pengajuan'] == 'Baru') {
            $update = mysqli_query($koneksi, "UPDATE tb_arsip_surat SET tb_arsip_surat.file_surat='$namaBaru', tb_arsip_surat.tgl_surat = CURDATE() where tb_arsip_surat.id_pengajuan='$id_pengajuan'");
            if ($update) {
                header("location: ../admin/diterima.php?id_pengajuan=$id_pengajuan");
                $_SESSION["pesan"] = "sukses";
                echo "Berhasil";
            } else {
                header("location: ../admin/diterima.php?id_pengajuan=$id_pengajuan");
                $_SESSION["pesan"] = "gagal";
                echo "Gagal";
            }
        } else {
            $update = mysqli_query($koneksi, "UPDATE tb_arsip_surat SET tb_arsip_surat.file_surat='$namaBaru', tb_arsip_surat.tgl_surat = CURDATE() where tb_arsip_surat.id_pengajuan='$id_pengajuan'");
            $updatePengajuan = mysqli_query($koneksi, "UPDATE tb_pengajuan SET status_pengajuan = 'Revisi Selesai' where tb_pengajuan.id_pengajuan = $id_pengajuan");
            if ($update && $updatePengajuan) {
                header("location: ../admin/revisi.php");
                $_SESSION["pesan"] = "sukses";
                echo "Berhasil";
            } else {
                header("location: ../admin/revisi.php");
                $_SESSION["pesan"] = "gagal";
                echo "Gagal";
            }
        }
    }
} else {
    header("location: ../admin/diterima.php?id_pengajuan=$id_pengajuan");
    $_SESSION["pesan"] = "gagal";
    echo "Gagal1";
}
