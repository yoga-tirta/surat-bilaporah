<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["button"])){
  $keperluan = $_POST["keperluan"];
  $nama = $_POST["nama"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tgl_lahir = $_POST["tgl_lahir"];
  $gender = $_POST["gender"];
  $golongan_darah = $_POST["golongan_darah"];
  $agama = $_POST["agama"];
  $status = $_POST["status"];
  $pekerjaan = $_POST["pekerjaan"];
  $alamat = $_POST["alamat"];
  $rt = $_POST["rt"];
  $rw = $_POST["rw"];
  $kelurahan = $_POST["kelurahan"];
  $kecamatan = $_POST["kecamatan"];
  $kabupaten = $_POST["kabupaten"];
  $provinsi = $_POST["provinsi"];
  $nik_user = $_SESSION['nik'];
  $kode_surat = $_GET["kode_surat"];

  // set jam asia di jakarta
  date_default_timezone_set('Asia/Jakarta');
  $tgl = date('y-m-d H:i:s'); //mengambil jam dan tgl sekarang
  
  $tb_pengajuan = mysqli_query($koneksi, "INSERT INTO tb_pengajuan(nik, kode_surat, tgl_pengajuan, keperluan, jenis_pengajuan, status_pengajuan) VALUES($nik_user,'$kode_surat','$tgl', '$keperluan', 'Baru', 'Menunggu')");

  if($tb_pengajuan){
    header("location: ../tambah_data/tambah_spk.php?nama=$nama&tempat_lahir=$tempat_lahir&tgl_lahir=$tgl_lahir&gender=$gender&golongan_darah=$golongan_darah&agama=$agama&status=$status&pekerjaan=$pekerjaan&alamat=$alamat&rt=$rt&rw=$rw&kelurahan=$kelurahan&kecamatan=$kecamatan&kabupaten=$kabupaten&provinsi=$provinsi&kode_surat=$kode_surat&tgl=$tgl");
  } else {
    echo 'Gagal';
  }
}
?>