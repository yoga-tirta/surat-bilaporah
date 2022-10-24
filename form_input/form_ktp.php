<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Pengantar KTP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7edde9a01a.js" crossorigin="anonymous"></script>

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
    <?php include "../desain/navbar.php"?>
    <div class="fix"> 
      <div class="container" style="margin-top: 40px; margin-bottom: 50px;">
        <h4 class="text-center">Formulir Pengantar KTP</h4>
        <hr>
        <form action="../tambah_pengajuan/pengajuan_spk.php?kode_surat=SPK" method="POST" enctype="multipart/form-data">

            <h3>Data Pribadi</h3>

            <div class="form-group">
              <label for="" style="margin-bottom: 5px;">Keperluan</label>
              <div class="input-group" style="margin-bottom: 5px;">
                <textarea class="form-control" name="keperluan" rows="3" required></textarea>
            </div>


            <label for="" style="margin-bottom: 5px;">Nama Lengkap</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text " style="height: 38px;"><i class="fas fa-user" ></i></div>
              </div>
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" style="margin-bottom: 5px;" required>
            </div>
          

            <label for="" style="margin-bottom: 5px;">Tempat Lahir</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
              </div>
              <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat" style="margin-bottom: 5px;" required>
            </div>

            <label for="" style="margin-bottom: 5px;">Tgl. Lahir</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
              </div>
              <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukan Tempat Tgl. Lahir" style="margin-bottom: 5px;" required>
            </div>
          
          
              <label for="" style="margin-bottom: 5px;">Jenis Kelamin</label>
              <div class="input-group">
                  <div class="input-group-prepend">
                      <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                    </div>
                    <select class="form-control form-control" name="gender">
                        <option selected>Pilih</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>


              <label for="" style="margin-bottom: 5px;">Golongan Darah</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="golongan_darah" class="form-control" placeholder="Masukan Golongan Darah" style="margin-bottom: 5px;" required>
              </div>

            
              <label for="" style="margin-bottom: 5px;">Agama</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="agama" class="form-control" placeholder="Masukan Agama" style="margin-bottom: 5px;" required>
              </div>

            
              <label for="" style="margin-bottom: 5px;">Status Perkawinan</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="status" class="form-control" placeholder="Masukan Status Perkawinan" style="margin-bottom: 5px;" required>
              </div>
            

            
              <label for="" style="margin-bottom: 5px;">Pekerjaan</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukan Pekerjaan" style="margin-bottom: 5px;" required>
              </div>

            <div class="form-group">
              <label for="" style="margin-bottom: 5px;">Alamat</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" style="margin-bottom: 5px;" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" style="margin-bottom: 5px;">RT</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="number" name="rt" class="form-control" placeholder="Masukan RT" style="margin-bottom: 5px;" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" style="margin-bottom: 5px;">RW</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="number" name="rw" class="form-control" placeholder="Masukan RW" style="margin-bottom: 5px;" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" style="margin-bottom: 5px;">Kelurahan</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="kelurahan" class="form-control" placeholder="Masukan Kelurahan" style="margin-bottom: 5px;" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" style="margin-bottom: 5px;">Kecamatan</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="kecamatan" class="form-control" placeholder="Masukan Kecamatan" style="margin-bottom: 5px;" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" style="margin-bottom: 5px;">Kota / Kabupaten</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="kabupaten" class="form-control" placeholder="Masukan Kabupaten" style="margin-bottom: 5px;" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" style="margin-bottom: 5px;">Provinsi</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="provinsi" class="form-control" placeholder="Masukan Provinsi" style="margin-bottom: 5px;" required>
              </div>
            </div>

              <div class="form-group">
              <label for="" style="margin-bottom: 5px;">Pas Foto 3x4</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="file" accept="image/*" name="file" class="form-control" placeholder="Masukan Alamat" style="margin-bottom: 5px;" required>
              </div>
            </div>
          <button type="submit" name="button" class="btn-primary" style="margin-top: 5px;">submit</button>
        </form>
      </div>
    </div>
  <!-- End Hero -->
  <?php include "../desain/footer.php"?>

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