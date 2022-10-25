    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div>Selamat Datang <?= $tb_user["nama_user"] ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../admin/page_admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Fitur</div>

            <!-- Nav Item - User Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#userMenu" aria-expanded="true" aria-controls="userMenu">
                    <i class="fas fa-user"></i>
                    <span>User</span>
                </a>
                <div id="userMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan</h6>
                        <a class="collapse-item" href="../admin/user.php">Akun User</a>
                        <a class="collapse-item" href="../admin/warga.php">Data Warga</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Reservasi Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#reservasi" aria-expanded="true" aria-controls="reservasi">
                    <i class="fas fa-book-open"></i>
                    <span>Pengajuan</span>
                </a>
                <div id="reservasi" class="collapse" aria-labelledby="headingReservasi" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu</h6>
                        <!-- <a class="collapse-item" href="../admin/diterima.php">Pengajuan Di Terima</a>
                        <a class="collapse-item" href="../admin/ditolak.php">Pengajuan Di Tolak</a>
                        <a class="collapse-item" href="../admin/revisi.php">Pengajuan Revisi</a>
                        <a class="collapse-item" href="../admin/semua_pengajuan.php">Riwayat Pengajuan</a> -->
                    </div>
                </div>
            </li>

            <!-- Nav Item - surat Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#surat" aria-expanded="true" aria-controls="surat">
                    <i class="fas fa-envelope"></i>
                    <span>Surat</span>
                </a>
                <div id="surat" class="collapse" aria-labelledby="headingsurat" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan</h6>
                        <!-- <a class="collapse-item" href="../admin/surat_masuk.php">Surat Masuk </a>
                        <a class="collapse-item" href="../admin/surat_keluar.php">Surat Keluar </a> -->
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->