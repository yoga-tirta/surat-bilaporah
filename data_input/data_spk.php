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
    <title>Admin | inputan spk</title>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/img/gresik.png" rel="icon">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <?php include "../desain/sidebar_admin.php"; ?>
    <?php include "../desain/navbar_admin.php"; ?>
    <?php
    $id_pengajuan = $_GET["id_pengajuan"];
    $data_spk = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_spk, tb_pengajuan where id_pengajuan_spk=$id_pengajuan"));
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
                    <h4 class="m-0 font-weight-bold text-primary">Data User Untuk Surat Pengantar KTP</h4>
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
                                <td>: <?= $data_spk["nama"] ?></td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td>Tempat Lahir</td>
                                <td>: <?= $data_spk["tempat_lahir"] ?></td>
                            </tr>

                            <tr>
                                <td>3.</td>
                                <td>Tanggal lahir</td>
                                <td>: <?= $data_spk["tgl_lahir"] ?></td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td>jenis kelamin</td>
                                <td>: <?= $data_spk["gender"] ?></td>
                            </tr>

                            <tr>
                                <td>5.</td>
                                <td>Golongan darah</td>
                                <td>: <?= $data_spk["gol_darah"] ?></td>
                            </tr>

                            <tr>
                                <td>6.</td>
                                <td>Agama</td>
                                <td>: <?= $data_spk["agama"] ?></td>
                            </tr>

                            <tr>
                                <td>7.</td>
                                <td>status perkawinan</td>
                                <td>: <?= $data_spk["status"] ?></td>
                            </tr>

                            <tr>
                                <td>8.</td>
                                <td>Pekerjaan</td>
                                <td>: <?= $data_spk["pekerjaan"] ?></td>
                            </tr>

                            <tr>
                                <td>9.</td>
                                <td>Alamat</td>
                                <td>: <?= $data_spk["alamat"] ?></td>
                            </tr>

                            <tr>
                                <td>10.</td>
                                <td>Rt</td>
                                <td>: <?= $data_spk["rt"] ?></td>
                            </tr>

                            <tr>
                                <td>11.</td>
                                <td>Rw</td>
                                <td>: <?= $data_spk["rw"] ?></td>
                            </tr>

                            <tr>
                                <td>12.</td>
                                <td>Kelurahan</td>
                                <td>: <?= $data_spk["kelurahan"] ?></td>
                            </tr>

                            <tr>
                                <td>12.</td>
                                <td>Kecamatan</td>
                                <td>: <?= $data_spk["kecamatan"] ?></td>
                            </tr>

                            <tr>
                                <td>13.</td>
                                <td>Kabupaten/Kota</td>
                                <td>: <?= $data_spk["kota"] ?></td>
                            </tr>

                            <tr>
                                <td>14.</td>
                                <td>Provinsi</td>
                                <td>: <?= $data_spk["provinsi"] ?></td>
                            </tr>

                            <tr>
                                <td>14.</td>
                                <td>Foto 3X4</td>
                                <td>: <a href="../foto_ktp/<?= $data_spk["foto"] ?>"><img src="../foto_ktp/<?= $data_spk["foto"] ?>" style="height: 100px; witdh: 100px;"></a></td>
                            </tr>

                            <tr>
                                <td rowspan="5">15.</td>
                                <td rowspan="5">Keperluan</td>
                                <td>: <?= $data_spk["keperluan"] ?></td>
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
                <span>Copyright copy; Safari Hotel 2021</span>
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