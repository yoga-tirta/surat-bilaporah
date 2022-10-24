<?php
include "../connect/koneksi.php";
include "../proses_login/session_login.php";
$username = $_SESSION["username"];
$tb_user = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_user where username='$username'"));
$nama = $tb_user["nama_user"];
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
    <link href="../assets/img/gresik.png" rel="icon">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <?php include "../desain/sidebar_admin.php"; ?>
    <?php include "../desain/navbar_admin.php"; ?>
    <!-- Awal Isi Konten -->
    <div class="container-fluid" style="height:66%; width:70%;">
        <!-- Halaman kepala -->
        <h1>Halaman Upload Surat</h1><br>
        <!-- Data Tabel -->
        <div class="card shadow mb-4" style="height:80%">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pilih File Surat</h6>
                </div>
            </div>
            <div class="card-body" style="margin: auto;margin-top: 10%; margin-left: 40%;">
                <form action="../update_data/update_file.php?id_pengajuan=<?= $_GET['id_pengajuan'] ?>&jenis_surat=<?= $_GET['jenis_surat'] ?>&nama=<?= $_GET['nama'] ?>&kode_surat=<?= $_GET['kode_surat'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3" style="margin-left: -34%;">
                        <table border="1px">
                            <tr>
                                <td>
                                    <input type="file" name="file" style="margin: auto;">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white" style="margin-top:3%">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Safari Hotel 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/js_sidebar.js"></script>
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>