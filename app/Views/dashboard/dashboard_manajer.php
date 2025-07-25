<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<h1 class="h3 mb-4 text-gray-800">Dashboard Manajer</h1>

<div class="alert alert-info">Selamat datang, <strong><?= esc($username) ?></strong> (Role: <?= esc($role) ?>)</div>

<div class="row">
    <!--Total Barang -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalBarang ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-box fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- link ke halaman laporan -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="<?= base_url('laporan') ?>" class="text-decoration-none">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Lihat Laporan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Klik di sini</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<?= $this->endSection() ?>