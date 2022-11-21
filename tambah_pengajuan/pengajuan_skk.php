<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["button"])){
  $keperluan = $_POST["keperluan"];
  $nama = $_POST["nama"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tgl = $_POST['waktu_pengajuan'];
  $tgl_lahir = $_POST["tgl_lahir"];
  $gender = $_POST["gender"];
  $pekerjaan = $_POST["pekerjaan"];
  $alamat = $_POST["alamat"];
  $hari_meninggal = $_POST["hari_meninggal"];
  $tgl_meninggal = $_POST["tgl_meninggal"];
  $nik_user = $_SESSION['nik'];
  $kode_surat = $_GET["kode_surat"];

  // set jam asia di jakarta
  date_default_timezone_set('Asia/Jakarta');
  $tgl = date('y-m-d H:i:s'); //mengambil jam dan tgl sekarang

  $tb_pengajuan = mysqli_query($koneksi, "INSERT INTO tb_pengajuan(nik, kode_surat, tgl_pengajuan, keperluan, jenis_pengajuan, status_pengajuan) VALUES($nik_user,'$kode_surat','$tgl', '$keperluan', 'Baru', 'Menunggu')");  
  
  if($tb_pengajuan){
      header("location: ../tambah_data/tambah_skk.php?nama=$nama&tempat_lahir=$tempat_lahir&tgl_lahir=$tgl_lahir&gender=$gender&pekerjaan=$pekerjaan&alamat=$alamat&hari_meninggal=$hari_meninggal&tgl_meninggal=$tgl_meninggal&kode_surat=$kode_surat&tgl=$tgl");
  } else {
    echo 'Gagal';
  }
}
?>
