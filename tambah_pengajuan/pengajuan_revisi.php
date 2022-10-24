<?php
include "../connect/koneksi.php";
session_start();
if (isset($_POST["button"])) {
    $keperluan = $_POST["keperluan"];
    $id_pengajuan = $_POST["id_pengajuan"];

    // set jam asia di jakarta
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date('y-m-d H:i:s'); //mengambil jam dan tgl sekarang

    $tb_pengajuan = mysqli_query($koneksi, "UPDATE tb_pengajuan SET keperluan = '$keperluan', jenis_pengajuan = 'Revisi', status_pengajuan='Menunggu' where id_pengajuan = '$id_pengajuan'");
    if ($tb_pengajuan) {
        header("location: ../user/riwayat.php");
    }
}
