<?php
include "../connect/koneksi.php";
session_start();
if (isset($_POST["button"])) {
  $keperluan = $_POST["keperluan"];
  $nama = $_POST["nama_sktm"];
  $nama_sktm = $_POST['nama_sktm'];
  $tempat_lahir = $_POST["tempat_lahir"];
  $lahir = $_POST["lahir"];
  $gender = $_POST["gender"];
  $status = $_POST["status"];
  $pekerjaan = $_POST["pekerjaan"];
  $alamat = $_POST["alamat"];
  // siswa
  $nama_murid = $_POST["nama_murid"];
  $tempat_lahir_murid = $_POST["tempat_lahir_murid"];
  $tgl_lahir_murid = $_POST["tgl_lahir_murid"];
  $gender_murid = $_POST["gender_murid"];
  $agama_murid = $_POST["agama"];
  $anak_murid = $_POST["anak_murid"];
  $alamat_murid = $_POST["alamat_murid"];
  $nisn = $_POST["nisn"];
  
  $nik_user = $_SESSION["nik"]; 
  $kode_surat = $_GET["kode_surat"];
  // set jam asia di jakarta
  date_default_timezone_set('Asia/Jakarta');
  $tgl = date('y-m-d H:i:s'); //mengambil jam dan tgl sekarang

  $tb_pengajuan = mysqli_query($koneksi, "INSERT INTO tb_pengajuan(nik, kode_surat, tgl_pengajuan, keperluan, jenis_pengajuan, status_pengajuan) VALUES($nik_user,'$kode_surat','$tgl', '$keperluan', 'Baru', 'Menunggu')");
  if ($tb_pengajuan) {

    header("location: ../tambah_data/tambah_sktm.php?nama_sktm=$nama_sktm&tempat_lahir=$tempat_lahir&lahir=$lahir&gender=$gender&pekerjaan=$pekerjaan&alamat=$alamat&nama_murid=$nama_murid&tempat_lahir_murid=$tempat_lahir_murid&tgl_lahir_murid=$tgl_lahir_murid&gender_murid=$gender_murid&agama_murid=$agama_murid&anak_murid=$anak_murid&alamat_murid=$alamat_murid&nisn=$nisn&kode_surat=$kode_surat&tgl=$tgl");
  } else {
    echo 'Gagal';
  }
}
