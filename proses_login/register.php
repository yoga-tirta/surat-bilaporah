<?php
ob_start();
include "../connect/koneksi.php";
session_start();
// di gunakan agar tidak dapat masuk ke tampilan user maupun admin
if (isset($_SESSION['nik'])) {
    if ($_SESSION["nik"] == "admin") {
        header('location: ../admin/page_admin.php');
        exit;
    } else if ($_SESSION["nik"] != "admin") {
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

    <title>Register</title>
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
    <section id="hero" style="height:850px">
        <div class="fix" style="margin-top: 5%;">
            <div class="container" style="width: 50%">
                <img src="../assets/img/desa.png" alt="" class="img-fluid" style="width: 15%; margin-left: 8%; margin-bottom: 10%;   ">
                <h3 class="text-center" style="margin-top: -17%; margin-left: 16%; margin-right: -4%">Form Register</h3>
                <hr>
                <form class="row g-3" method="POST">
                    <div class="col-md-6">
                        <label for="">Nomor Induk Kewarganegaraan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                            </div>
                            <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK" style="margin-bottom: 5px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Nama Lengkap</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-user-check"></i></div>
                            </div>
                            <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama Lengkap" style="margin-bottom: 5px;">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="">Tempat Lahir</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-house-user"></i></div>
                            </div>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" style="margin-bottom: 5px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Tanggal Lahir</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-calendar"></i></div>
                            </div>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" style="margin-bottom: 5px;">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="">Jenis Kelamin</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-venus-mars"></i></div>
                            </div>
                            <select name="gender" id="gender" class="form-select">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Agama</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-mosque"></i></div>
                            </div>
                            <select name="agama" id="agama" class="form-select">
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-home"></i></div>
                            </div>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" style="margin-bottom: 5px;">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username" style="margin-bottom: 5px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text " style="height: 38px;"><i class="fas fa-lock"></i></div>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" style="margin-bottom: 5px;">
                        </div>
                    </div>
                    <?php include "regisAction.php"; ?>

                    <h6>Sudah punya akun? <a href="login.php">masuk</a></h6>
                    <button type="submit" name="button" class="btn-primary" style="margin-top: 5px;">Daftar</button>
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