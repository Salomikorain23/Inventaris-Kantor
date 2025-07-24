<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard Inventaris Barang</h1>


    <div class="row">
        <!-- Total Barang -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('barang') ?>" class="text-decoration-none">
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
            <a href="<?= base_url('peminjaman') ?>" class="text-decoration-none">
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
            <a href="<?= base_url('pengembalian') ?>" class="text-decoration-none">
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
<!-- /.container-fluid -->
<?= $this->endSection() ?>