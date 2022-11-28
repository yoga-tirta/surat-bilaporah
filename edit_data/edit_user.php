<?php
include "../connect/koneksi.php";
include "../proses_login/session_login.php";
$username = $_SESSION["username"];
$tb_user = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_user where username='$username'"));
$nama = $tb_user["nama_user"];
$nik = $tb_user["nik"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Dashboard</title>
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/img/desa.png" rel="icon">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php include "../desain/sidebar_admin.php"; ?>
  <?php include "../desain/navbar_admin.php";
  $nik = $_GET["nik"];
  $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * from tb_user where nik='$nik'"));
  ?>

  <!-- Awal Isi Konten -->
  <div class="container-fluid">
    <!-- Data Tabel -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
      </div>
      <div class="card-body">
        <form action="../update_data/update_user.php" method="POST">
          <div class="form-group row">
            <label for="input_nama_barang" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-md-3">
              <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK" value="<?= $data['nik'] ?>" disabled>
              <input type="hidden" class="form-control" name="nik" placeholder="Masukkan NIK" value="<?= $data['nik'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_nama_barang" class="col-sm-2 col-form-label">Username</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?= $data['username'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_nama_barang" class="col-sm-2 col-form-label">Password</label>
            <div class="col-md-3">
              <input type="password" class="form-control" name="password" placeholder="Masukkan Password" value="<?= $data['password'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_nama_barang" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= $data['nama_user'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="<?= $data['tempat_lahir'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-md-3">
              <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?= $data['tanggal_lahir'] ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-md-3">
              <select name="gender" id="gender" class="form-control" placeholder="Pilih Jenis Kelamin" value="<?= $data['gender'] ?>">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-md-3">
              <select name="agama" id="agama" class="form-control" placeholder="Pilih Agama" value="<?= $data['agama'] ?>">
                <option value="Islam">Islam</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Kristen Katolik">Kristen Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?= $data['alamat'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" name="update_user">Update</button>
              <a href="../admin/user.php"><button type="button" class="btn btn-danger" name="batal">Batal</button></a>
            </div>
          </div>
          <?php
          if (isset($_SESSION["pesan"])) {
            if ($_SESSION["pesan"] == "sukses") { ?>
              <script>
                Swal.fire('SUKSES', 'DATA BERHASIL DI UBAH', 'success')
              </script>
            <?php unset($_SESSION["pesan"]);
            } elseif ($_SESSION["pesan"] == "gagal") { ?>
              <script>
                Swal.fire('ERROR', 'DATA GAGAL DI UBAH', 'error')
              </script>
          <?php
              unset($_SESSION["pesan"]);
            }
          }
          ?>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>
