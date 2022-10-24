<?php include "../proses_login/session_login.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beranda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/desa.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v4.7.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php include "C:/xampp/htdocs/surat/desain/navbar.php"?>

  <!-- ======= Hero Section ======= -->
  <?php
  if(isset($_SESSION["pesan"])){
    if($_SESSION["pesan"]=="sukses"){?>
      <script>Swal.fire('SUKSES','PENGAJUAN SUKSES','success')</script>
      <?php unset($_SESSION["pesan"]);
    }elseif($_SESSION["pesan"]== "gagal"){?>
      <script>Swal.fire('ERROR','PENGAJUAN GAGAL','error')</script>
      <?php 
      unset($_SESSION["pesan"]);
    }
  }
  ?>

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <img src="../assets/img/desa.png" alt="" class="img-fluid" style="width: 10%; margin-top: 25PX; margin-bottom: 15px;">
        <h1 style="text-align: center; margin-top: -100px; margin-left: 130px; margin-bottom: 40px;" > Layanan Surat Online Pemerintah Desa Bilapora</h1>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <a href="../form_input/form_sktm.php?kode_surat=SKTM" style="color:black">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4>Surat Keterangan Tidak Mampu</h4>
                <p>Pengajuan Surat Keterangan Tidak Mampu Desa Bilaporah</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <a href="../form_input/form_akta.php?kode_surat=SPA" style="color:black">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4>Surat Pengantar Akta</h4>
                <p>Pengajuan Surat Pengantar Akta Desa Bilaporah</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <a href="../form_input/form_kematian.php?kode_surat=SKK" style="color:black">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4>Surat Keterangan Kematian</h4>
                <p>Pengajuan Surat Keterangan Kematian Desa Bilaporah</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <a href="../form_input/form_ktp.php?kode_surat=SPK" style="color:black">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4>Surat Pengantar KTP</h4>
                <p>Pengajuan Surat Pengantar KTP Desa Bilaporah</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <a href="../form_input/form_nikah.php?kode_surat=SKM" style="color:black">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4>Surat Keterangan Menikah</h4>
                <p>Pengajuan Surat Keterangan Menikah Desa Bilaporah</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <a href="../form_input/form_lainnya.php?kode_surat=SL" style="color:black">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4>Surat Lainnya</h4>
                <p>Pengajuan Surat Lainnya Desa Bilaporah</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

  <?php include "C:/xampp/htdocs/surat/desain/footer.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>