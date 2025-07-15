<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Inventaris Barang Kantor</title>
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion shadow" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-boxes"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Inventaris Kantor</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= uri_string() === 'dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Inventaris
            </div>

            <!-- Barang -->
            <li class="nav-item <?= uri_string() === 'barang' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('barang') ?>">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Barang</span>
                </a>
            </li>

            <!-- Peminjaman -->
            <li class="nav-item <?= uri_string() === 'peminjaman' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('peminjaman') ?>">
                    <i class="fas fa-fw fa-hand-holding"></i>
                    <span>Peminjaman</span>
                </a>
            </li>

            <!-- Pengembalian -->
            <li class="nav-item <?= uri_string() === 'pengembalian' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('pengembalian') ?>">
                    <i class="fas fa-fw fa-undo"></i>
                    <span>Pengembalian</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">
                    <div class="container-fluid">
                        <h5 class="text-gray-800 font-weight-bold mb-0">Sistem Informasi Inventaris Barang Kantor</h5>

                        <!-- Info Pengguna -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <span class="nav-link text-dark">Selamat datang, <strong>Admin</strong></span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="<?= base_url('logout') ?>">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Dashboard Inventaris Barang</h1>

                    <!-- Ringkasan Dashboard -->
                    <div class="row">
                        <!-- Total Barang -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="<?= base_url('barang') ?>" style="text-decoration: none;">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">120</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-box fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Barang Masuk -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Masuk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">45</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Barang Keluar -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Barang Keluar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">32</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-arrow-up fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Peminjaman -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="<?= base_url('peminjaman') ?>" style="text-decoration: none;">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Peminjaman</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-hand-holding fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Pengembalian -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="<?= base_url('pengembalian') ?>" style="text-decoration: none;">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengembalian</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-undo-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- End Container -->
            </div>
            <!-- End Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Inventaris Kantor 2025</span>
                    </div>
                </div>
            </footer>
        </div>
        <!-- End Content Wrapper -->
    </div>
    <!-- End Page Wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>
</body>

</html>