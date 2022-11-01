<?php
session_start();
// di gunakan agar tidak dapat masuk ke tampilan user maupun admin
if (isset($_SESSION['username'])) {
  if ($_SESSION["username"] == "admin") {
    header('location: ../admin/page_admin.php');
    exit;
  } else if ($_SESSION["username"] != "admin") {
    header('location: ../user/home.php');
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7edde9a01a.js" crossorigin="anonymous"></script>

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
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1><a href="../index.php"> Kelurahan Desa Bilaporah</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="#">Informasi</a></li>
          <li><a href="#">Pelayanan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>

  <!-- End Header -->
  <!-- ======= Hero Section ======= -->

  <section id="hero" style="height: 500px;">
    <div class="fix" style="margin-top: 5%;">
      <div class="container">
        <img src="../assets/img/desa.png" alt="" class="img-fluid" style="width: 20%; margin-left: 8%; margin-bottom: 5%;   ">
        <h4 class="text-center" style="margin-top: -17%; margin-left: 16%; margin-right: -4%">Form Login</h4>
        <hr>
        <form method="POST">
          <div class="form-group">
            <label for="" style="margin-bottom: 5px;">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text " style="height: 38px;"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" name="username" class="form-control" placeholder="Masukan Username" style="margin-bottom: 5px;">
            </div>
          </div>

          <div class="form-group">
            <label for="" style="margin-bottom: 5px;">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Masukan Password" style="margin-bottom: 5px;">
            </div>
          </div>
          
          <?php
          include "../connect/koneksi.php";
          include "../proses_login/verif_login.php";
          ?>
          
          <h6>Belum punya akun? <a href="register.php">daftar</a></h6>
          <button type="submit" name="button" class="btn-primary" style="margin-top: 5px;">Masuk</button>
        </form>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <?php include "../desain/footer.php" ?>

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