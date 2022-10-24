<?php
include "../connect/koneksi.php";
session_start();
$id_pengajuan = $_GET["id_pengajuan"];
$update = mysqli_query($koneksi,"UPDATE tb_pengajuan SET tb_pengajuan.status_pengajuan='Di Tolak' where tb_pengajuan.id_pengajuan=$id_pengajuan");
if($update){
    $_SESSION["pesan"] = "sukses1";
    header("location: ../admin/page_admin.php");
    echo "Berhasil";
}else{
    $_SESSION["pesan"] = "gagal1";
    header("location: ../admin/page_admin.php");
    echo "Gagal";
}
?>