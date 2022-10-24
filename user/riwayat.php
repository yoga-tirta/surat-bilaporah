<?php include "../proses_login/session_login.php"; ?>
<?php include "../connect/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Riwayat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/gresik.png" rel="icon">
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
  <?php include "../desain/navbar.php" ?>
  <!-- ======= Hero Section ======= -->
  <?php
  if (isset($_SESSION["pesan"])) {
    if ($_SESSION["pesan"] == "sukses") { ?>
      <script>
        Swal.fire('SUKSES', 'PENGAJUAN SUKSES', 'success')
      </script>
    <?php unset($_SESSION["pesan"]);
    } elseif ($_SESSION["pesan"] == "gagal") { ?>
      <script>
        Swal.fire('ERROR', 'PENGAJUAN GAGAL', 'error')
      </script>
  <?php
      unset($_SESSION["pesan"]);
    }
  }

  $nik = $_SESSION['nik'];

  $data_pengajuan = mysqli_query($koneksi, "SELECT tb_pengajuan.id_pengajuan, tb_pengajuan.status_pengajuan, tb_pengajuan.jenis_pengajuan, tb_surat.jenis_surat FROM tb_pengajuan INNER JOIN tb_surat USING(kode_surat) WHERE tb_pengajuan.nik = '$nik'");
  // $data_arsip_surat = mysqli_fetch_row(mysqli_query($koneksi, "SELECT * FROM tb_arsip_surat INNER JOIN tb_pengajuan USING(id_pengajuan) INNER JOIN tb_user USING(nik) WHERE tb_user.nik= '$nik'"));
  ?>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" style="margin-top: 40PX;">
        <img src="../assets/img/gresik.png" alt="" class="img-fluid" style="width: 10%; margin-top: 15PX; margin-bottom: 15px; margin-left:180px">
        <h1 style="text-align: center; margin-top: -90px; margin-left: -75px; margin-bottom: 40px; margin-right:-200px"> RIWAYAT PENGAJUAN SURAT</h1>
      </div>
      <div class="contaiiner" style="margin:100px; margin-top:100px">
        <?php
        if (mysqli_fetch_assoc($data_pengajuan) == NULL) {
          echo '<h1>Tidak Ada Pengajuan Surat<h1>';
        } else {
          $y = 0;
          foreach ($data_pengajuan as $row) {
            $id_pengajuan = $row['id_pengajuan'];
            $data_arsip_surat = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_arsip_surat INNER JOIN tb_pengajuan USING(id_pengajuan) INNER JOIN tb_user USING(nik) WHERE tb_user.nik= '$nik' and tb_pengajuan.id_pengajuan = $id_pengajuan "));
            if ($row['status_pengajuan'] == 'Di Terima' || $row['status_pengajuan'] == 'Revisi Di Terima' || $row['status_pengajuan'] == 'Revisi Selesai') {
              if ($data_arsip_surat['file_surat'] != '') {
                if ($row['jenis_pengajuan'] == 'Baru') { ?>
                  <div class="card w-70" style="margin-bottom: 15px;">
                    <div class="card-body" style="background-color:lavender;">
                      <h5 class="card-title"><?= $row['jenis_surat'] ?></h5>
                      <a href="../surat_keluar/<?= $data_arsip_surat['file_surat'] ?>" class="btn btn-primary">Download</a>
                      <a href="../form_input/form_revisi.php?id_pengajuan=<?= $row['id_pengajuan'] ?>" class="btn btn-primary">Ajukan Revisi</a>
                    </div>
                  </div>
                  <?php } else {
                  if ($row['status_pengajuan'] == 'Revisi Di Terima') { ?>
                    <div class="card w-70" style="margin-bottom: 15px;">
                      <div class="card-body" style="background-color:lavender;">
                        <h5 class="card-title"><?= $row['jenis_surat'] ?></h5>
                        <small>Surat Sedang Di Revisi</small>
                        <h5 class="card-title" style="text-align: right;">Pengajuan Revisi Di Terima </h5>
                        <a href="../surat_keluar/<?= $data_arsip_surat['file_surat'] ?>" class="btn btn-primary">Download</a>
                      </div>
                    </div>
                  <?php } else { ?>
                    <div class="card w-70" style="margin-bottom: 15px;">
                      <div class="card-body" style="background-color:lavender;">
                        <h5 class="card-title"><?= $row['jenis_surat'] ?></h5>
                        <a href="../surat_keluar/<?= $data_arsip_surat['file_surat'] ?>" class="btn btn-primary">Download</a>
                        <a href="../form_input/form_revisi.php?id_pengajuan=<?= $row['id_pengajuan'] ?>" class="btn btn-primary">Ajukan Revisi</a>
                      </div>
                    </div>
                <?php }
                }
              } else { ?>
                <div class="card w-70" style="margin-bottom: 15px;">
                  <div class="card-body" style="background-color:lavender;">
                    <h5 class="card-title"><?= $row['jenis_surat'] ?></h5>
                    <small>Surat Sedang Dalam Proses Pembuatan</small>
                    <h5 class="card-title" style="text-align: right;">Pengajuan Di Terima </h5>
                  </div>
                </div>
              <?php }
            } elseif ($row['status_pengajuan'] == 'Menunggu') {
              if ($row['jenis_pengajuan'] == 'Baru') { ?>
                <div class="card w-70" style="margin-bottom: 15px;">
                  <div class="card-body" style="background-color:lavender;">
                    <h5 class="card-title"><?= $row['jenis_surat'] ?></h5>
                    <small>Surat Sedang Dalam Proses Pengajuan Mohon Di Tunggu</small>
                    <h5 class="card-title" style="text-align: right;">Proses Pengajuan</h5>
                  </div>
                </div>
              <?php } else { ?>
                <div class="card w-70" style="margin-bottom: 15px;">
                  <div class="card-body" style="background-color:lavender;">
                    <h5 class="card-title"><?= $row['jenis_surat'] ?></h5>
                    <small>Surat Sedang Dalam Proses Pengajuan Revisi</small>
                    <h5 class="card-title" style="text-align: right;">Proses Pengajuan Revisi </h5>
                    <a href="../surat_keluar/<?= $data_arsip_surat['file_surat'] ?>" class="btn btn-primary">Download</a>
                  </div>
                </div>
              <?php } ?>
            <?php } elseif ($row['status_pengajuan'] == 'Di Tolak') { ?>
              <div class="card w-70" style="margin-bottom: 15px;">
                <div class="card-body" style="background-color:lavender;">
                  <h5 class="card-title"><?= $row['jenis_surat'] ?></h5>
                  <small>Pengajuan Surat Anda Di Tolak Mohon Memasukkan Data Diri Dengan Benar</small>
                  <h5 class="card-title" style="text-align: right;">Pengajuan Di Tolak</h5>
                </div>
              </div>
            <?php }  ?>
        <?php $y++;
          }
        } ?>



      </div>
    </section><!-- End Services Section -->
    <!-- ======= Clients Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Pare N0.3 <br>
              Benjeng, Gresik<br>
              Jawa Timur <br><br>
              <strong>Phone:</strong> +62 857 3367 4996<br>
              <strong>Email:</strong> pemdespare@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Eterna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Eterna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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
  <script src="../assets/"></script>

</body>

</html>