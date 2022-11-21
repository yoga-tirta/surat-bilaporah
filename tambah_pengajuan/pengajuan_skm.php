<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["button"])){
  $keperluan = $_POST["keperluan"];
  $nama = $_POST["nama"];
  $gender = $_POST["gender"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tgl_lahir = $_POST["tgl_lahir"];
  $agama = $_POST["agama"];
  $status = $_POST["status"];
  $pekerjaan = $_POST["pekerjaan"];
  $kewarganegaraan = $_POST["kewarganegaraan"];
  $alamat = $_POST["alamat"];
  $nama_pasangan = $_POST["nama_pasangan"];
  $gender_pasangan = $_POST["gender_pasangan"];
  $tempat_lahir_pasangan = $_POST["tempat_lahir_pasangan"];
  $tgl_lahir_pasangan = $_POST["tgl_lahir_pasangan"];
  $kewarganegaraan_pasangan = $_POST["kewarganegaraan_pasangan"];
  $nik_user = $_SESSION['nik'];
  $kode_surat = $_GET["kode_surat"];
  $tgl = $_POST['waktu_pengajuan'];

  // set jam asia di jakarta
  date_default_timezone_set('Asia/Jakarta');
  $tgl = date('y-m-d H:i:s'); //mengambil jam dan tgl sekarang

  $tb_pengajuan = mysqli_query($koneksi, "INSERT INTO tb_pengajuan(nik, kode_surat, tgl_pengajuan, keperluan, jenis_pengajuan, status_pengajuan) VALUES($nik_user,'$kode_surat','$tgl', '$keperluan', 'Baru', 'Menunggu')");
  
  if($tb_pengajuan){
      header("location: ../tambah_data/tambah_skm.php?nama=$nama&gender=$gender&tempat_lahir=$tempat_lahir&tgl_lahir=$tgl_lahir&agama=$agama&status=$status&pekerjaan=$pekerjaan&kewarganegaraan=$kewarganegaraan&alamat=$alamat&nama_pasangan=$nama_pasangan&gender_pasangan=$gender_pasangan&tempat_lahir_pasangan=$tempat_lahir_pasangan&tgl_lahir_pasangan=$tgl_lahir_pasangan&kewarganegaraan_pasangan=$kewarganegaraan_pasangan&kode_surat=$kode_surat&tgl=$tgl");
  } else {
    echo 'Gagal';
  }
}
?>
