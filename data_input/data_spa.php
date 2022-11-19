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
    <title>Admin | inputan spa</title>
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
    $data_spa = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_spa, tb_pengajuan where id_pengajuan_spa=$id_pengajuan"));
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
                    <h4 class="m-0 font-weight-bold text-primary">Data Input User</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Data</th>
                                <th></th>
                                <th>Inputan User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Nama Ayah</td>
                                <td>: <?= $data_spa["nama_ayah"] ?></td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td>Nama Ibu</td>
                                <td>: <?= $data_spa["nama_ibu"] ?></td>
                            </tr>

                            <tr>
                                <td>3.</td>
                                <td>Jenis Kelamin Ortu</td>
                                <td>: <?= $data_spa["gender"] ?></td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td>Tempat Lahir Ortu</td>
                                <td>: <?= $data_spa["tempat_lahir"] ?></td>
                            </tr>

                            <tr>
                                <td>5.</td>
                                <td>Tanggal Lahir Ortu</td>
                                <td>: <?= $data_spa["tgl_lahir"] ?></td>
                            </tr>

                            <tr>
                                <td>6.</td>
                                <td>Hubungan Keluarga</td>
                                <td>: <?= $data_spa["hubungan"] ?></td>
                            </tr>

                            <tr>
                                <td>7.</td>
                                <td>Pekerjaan</td>
                                <td>: <?= $data_spa["pekerjaan"] ?></td>
                            </tr>

                            <tr>
                                <td>8.</td>
                                <td>Alamat</td>
                                <td>: <?= $data_spa["alamat"] ?></td>
                            </tr>

                            <tr>
                                <td>9.</td>
                                <td>Nama Anak</td>
                                <td>: <?= $data_spa["nama_anak"] ?></td>
                            </tr>

                            <tr>
                                <td>10.</td>
                                <td>Jenis Kelamin Anak</td>
                                <td>: <?= $data_spa["gender_anak"] ?></td>
                            </tr>

                            <tr>
                                <td>11.</td>
                                <td>Tempat Lahir Anak</td>
                                <td>: <?= $data_spa["tempat_lahir_anak"] ?></td>
                            </tr>

                            <tr>
                                <td>12.</td>
                                <td>Tanggal Lahir Anak</td>
                                <td>: <?= $data_spa["tgl_lahir_anak"] ?></td>
                            </tr>

                            <tr>
                                <td>13.</td>
                                <td>Waktu Lahir Anak</td>
                                <td>: <?= $data_spa["waktu_lahir_anak"] ?></td>
                            </tr>

                            <tr>
                                <td rowspan="5">14.</td>
                                <td rowspan="5">Keperluan</td>
                                <td>: <?= $data_spa["keperluan"] ?></td>
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