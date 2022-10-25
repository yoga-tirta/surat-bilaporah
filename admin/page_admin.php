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
    <link href="../assets/img/desa.png" rel="icon">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <?php include "../desain/sidebar_admin.php"; ?>
    <?php include "../desain/navbar_admin.php"; ?>
    <?php
    if (isset($_SESSION["pesan"])) {
        if ($_SESSION["pesan"] == "sukses") { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>BERHASIL!!</strong> Pengajuan Berhasil Di Terima
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php unset($_SESSION["pesan"]);
        } elseif ($_SESSION["pesan"] == "gagal") { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>GAGAL!!!</strong> Pengajuan Gagal Di Terima
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
            unset($_SESSION["pesan"]);
        } elseif ($_SESSION["pesan"] == "sukses1") { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>BERHASIL!!</strong> Pengajuan Berhasil Di Tolak
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php unset($_SESSION["pesan"]);
        } elseif ($_SESSION["pesan"] == "gagal1") { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>GAGAL!!!</strong> Pengajuan Gagal Di Tolak
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php
            unset($_SESSION["pesan"]);
        }
    }
    $total_sktm = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_surat.surat_keluar FROM tb_surat where kode_surat='SKTM'"));
    $total_spa = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_surat.surat_keluar FROM tb_surat where kode_surat='SPA'"));
    $total_skk = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_surat.surat_keluar FROM tb_surat where kode_surat='SKK'"));
    $total_spk = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_surat.surat_keluar FROM tb_surat where kode_surat='SPK'"));
    $total_skm = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_surat.surat_keluar FROM tb_surat where kode_surat='SKM'"));
    $total_sl = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_surat.surat_keluar FROM tb_surat where kode_surat='SL'"));
    $total_surat = $total_sktm["surat_keluar"] + $total_spa["surat_keluar"] + $total_skk["surat_keluar"] + $total_spk["surat_keluar"] + $total_skm["surat_keluar"] + $total_sl["surat_keluar"];
    $total_pengajuan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(tb_pengajuan.status_pengajuan) AS total FROM tb_pengajuan where tb_pengajuan.status_pengajuan='Menunggu'"));
    ?>
    <!-- Awal Isi Konten -->
    <div class="container-fluid">

        <!-- Halaman kepala -->
        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

        <!-- Content Row -->
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total SURAT KETERANGAN TIDAK MAMPU KELUAR</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_sktm["surat_keluar"] ?> Surat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TOTAL SURAT PENGANTAR AKTA KELUAR</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_spa["surat_keluar"] ?> Surat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL SURAT KETERANGAN KEMATIAN KELUAR</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_skk["surat_keluar"] ?> Surat</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL SURAT PENGANTAR KTP KELUAR</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_spk["surat_keluar"] ?> Surat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TOTAL SURAT KETERANGAN MENIKAH KELUAR</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_skm["surat_keluar"] ?> Surat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TOTAL SURAT LAINNYA KELUAR</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_sl["surat_keluar"] ?> Surat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL SEMUA SURAT KELUAR</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_surat ?> Surat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL PENGAJUAN SURAT</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pengajuan["total"] ?> Pengajuan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Content Row -->
    </div>
    <!-- Awal Isi Konten -->
    <div class="container-fluid">
        <!-- Data Tabel -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Pengajuan Terbaru</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Kode Surat</th>
                                <th>Jenis Surat</th>
                                <th>Waktu Pengajuan</th>
                                <th>Keperluan</th>
                                <th>Data User</th>
                                <th>Jenis Pengajuan</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../db/dashboard.php"
                            ?>
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