<?php
include "../connect/koneksi.php";
session_start();
if (isset($_POST["button"])) {
  $keperluan = $_POST["keperluan"];
  $nama = $_POST["nama"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $lahir = $_POST["lahir"];
  $gender = $_POST["gender"];
  $status = $_POST["status"];
  $pekerjaan = $_POST["pekerjaan"];
  $alamat = $_POST["alamat"];
  $nik_user = $_SESSION["nik"]; 
  $kode_surat = $_GET["kode_surat"];
  // set jam asia di jakarta
  date_default_timezone_set('Asia/Jakarta');
  $tgl = date('y-m-d H:i:s'); //mengambil jam dan tgl sekarang

  $tb_pengajuan = mysqli_query($koneksi, "INSERT INTO tb_pengajuan(nik, kode_surat, tgl_pengajuan, keperluan, jenis_pengajuan, status_pengajuan) VALUES($nik_user,'$kode_surat','$tgl', '$keperluan', 'Baru', 'Menunggu')");
  if ($tb_pengajuan) {

    header("location: ../tambah_data/tambah_sktm.php?nama=$nama&tempat_lahir=$tempat_lahir&lahir=$lahir&gender=$gender&status=$status&pekerjaan=$pekerjaan&alamat=$alamat&kode_surat=$kode_surat&tgl=$tgl");
  } else {
    echo 'Gagal';
  }
}
