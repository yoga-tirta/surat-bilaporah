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
    <title>Admin | inputan skk</title>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/img/desa.png" rel="icon">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <?php include "../desain/sidebar_admin.php"; ?>
    <?php include "../desain/navbar_admin.php"; ?>
    <?php
    $id_pengajuan = $_GET["id_pengajuan"];
    $data_skk = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_skk, tb_pengajuan where id_pengajuan_skk=$id_pengajuan"));
    ?>
    <!-- Awal Isi Konten -->
    <div class="container-fluid">

        <!-- Halaman kepala -->

        <!-- Content Row -->
    </div>
    <!-- Awal Isi Konten -->
    <div class="container-fluid">
        <!-- Data Tabel -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Data User Untuk Surat Keterangan Kematian</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Data</th>
                                <th>Inputan User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Nama Lengkap</td>
                                <td>: <?= $data_skk["nama"] ?></td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td>Tempat Lahir</td>
                                <td>: <?= $data_skk["tempat_lahir"] ?></td>
                            </tr>

                            <tr>
                                <td>3.</td>
                                <td>Tanggal lahir</td>
                                <td>: <?= $data_skk["tgl_lahir"] ?></td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td>Jenis kelamin</td>
                                <td>: <?= $data_skk["gender"] ?></td>
                            </tr>

                            <tr>
                                <td>5.</td>
                                <td>Pekerjaan</td>
                                <td>: <?= $data_skk["pekerjaan"] ?></td>
                            </tr>

                            <tr>
                                <td>6.</td>
                                <td>Alamat</td>
                                <td>: <?= $data_skk["alamat"] ?></td>
                            </tr>

                            <tr>
                                <td>7.</td>
                                <td>Hari meninggal</td>
                                <td>: <?= $data_skk["hari_meninggal"] ?></td>
                            </tr>

                            <tr>
                                <td>8.</td>
                                <td>Tanggal meinggal</td>
                                <td>: <?= $data_skk["tgl_meninggal"] ?></td>
                            </tr>

                            <tr>
                                <td rowspan="5">9.</td>
                                <td rowspan="5">Keperluan</td>
                                <td>: <?= $data_skk["keperluan"] ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>2
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>&copy; Copyright 2022 by <a href="#">Desa Bilaporah</a></span>
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