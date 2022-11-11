<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["button"])){
  $keperluan = $_POST["keperluan"];
  $nama_ayah = $_POST["nama_ayah"];
  $nama_ibu = $_POST["nama_ibu"];
  $gender = $_POST["gender"];
  $agama = $_POST["agama"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tgl_lahir = $_POST["tgl_lahir"];
  $hubungan = $_POST["hubungan"];
  $pekerjaan = $_POST["pekerjaan"];
  $alamat = $_POST["alamat"];
  $nama_anak = $_POST["nama_anak"];
  $gender_anak = $_POST["gender_anak"];
  $tempat_lahir_anak = $_POST["tempat_lahir_anak"];
  $tgl_lahir_anak = $_POST["tgl_lahir_anak"];
  $waktu_lahir = $_POST["waktu_lahir"];
  $nik_user = $_SESSION['nik'];
  $kode_surat = $_GET["kode_surat"];

  // set jam asia di jakarta
  date_default_timezone_set('Asia/Jakarta');
  $tgl = date('y-m-d H:i:s'); //mengambil jam dan tgl sekarang

  $tb_pengajuan = mysqli_query($koneksi,"INSERT INTO tb_pengajuan(nik, kode_surat, tgl_pengajuan, keperluan, jenis_pengajuan, status_pengajuan) 
                                                            VALUES($nik_user,'$kode_surat','$tgl', '$keperluan', 'baru','Menunggu')");
  if($tb_pengajuan){
      header("location: ../tambah_data/tambah_spa.php?nama_ayah=$nama_ayah&nama_ibu=$nama_ibu&gender=$gender&agama=$agama&tempat_lahir=$tempat_lahir&tgl_lahir=$tgl_lahir&hubungan=$hubungan&pekerjaan=$pekerjaan&alamat=$alamat&nama_anak=$nama_anak&gender_anak=$gender_anak&tempat_lahir_anak=$tempat_lahir_anak&tgl_lahir_anak=$tgl_lahir_anak&waktu_lahir=$waktu_lahir&kode_surat=$kode_surat&tgl=$tgl");
  }
}
?>
