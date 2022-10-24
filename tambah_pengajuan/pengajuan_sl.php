<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["button"])){
  $keperluan = $_POST["keperluan"];
  $nama = $_POST["nama"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tgl_lahir = $_POST["tgl_lahir"];
  $gender = $_POST["gender"];
  $agama = $_POST["agama"];
  $status = $_POST["status"];
  $pekerjaan = $_POST["pekerjaan"];
  $no_hp = $_POST["no_hp"];
  $alamat = $_POST["alamat"];
  $nik_user = $_SESSION['nik'];
  $kode_surat = $_GET["kode_surat"];

  // set jam asia di jakarta
  date_default_timezone_set('Asia/Jakarta');
  $tgl = date('y-m-d H:i:s'); //mengambil jam dan tgl sekarang

  $nama_file_ktp = $_FILES["ktp"]["name"];
  $size_ktp = $_FILES["ktp"]["size"];
  $lokasi_ktp = $_FILES["ktp"]["tmp_name"];
  $error_ktp = $_FILES["ktp"]["error"];
  $pemisah_ktp = explode('.',$nama_file_ktp);
  $ekstention_ktp = strtolower(end($pemisah_ktp));
  $ktp = $nik_user.'-ktp-'.uniqid().'.'.$ekstention_ktp;

  $nama_file_kk = $_FILES["kk"]["name"];
  $size_kk = $_FILES["kk"]["size"];
  $lokasi_kk = $_FILES["kk"]["tmp_name"];
  $error_kk = $_FILES["kk"]["error"];
  $pemisah_kk = explode('.',$nama_file_kk);
  $ekstention_kk = strtolower(end($pemisah_kk));
  $kk = $nik_user.'-kk-'.uniqid().'.'.$ekstention_kk;

  if(in_array($ekstention_ktp,['jpg','jpeg','png']) and in_array($ekstention_kk,['jpg','jpeg','png']) and $size <= 10000000 and $error == 0){
    if(move_uploaded_file($lokasi_ktp,"../foto_ktp/".$ktp) && move_uploaded_file($lokasi_kk,"../foto_kk/".$kk)){
      $tb_pengajuan = mysqli_query($koneksi,"INSERT INTO tb_pengajuan(nik_user, kode_surat, waktu_pengajuan, keperluan, status_pengajuan) VALUES($nik_user,'$kode_surat','$tgl', '$keperluan', 'Menunggu')");
      if($tb_pengajuan){
        header("location: ../tambah_data/tambah_sl.php?nama=$nama&tempat_lahir=$tempat_lahir&tgl_lahir=$tgl_lahir&gender=$gender&agama=$agama&status=$status&pekerjaan=$pekerjaan&no_hp=$no_hp&alamat=$alamat&kode_surat=$kode_surat&tgl=$tgl&ktp=$ktp&kk=$kk");
      }
    }
  }
}
?>