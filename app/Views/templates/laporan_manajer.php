<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Laporan Inventaris</h1>
<p>Halaman ini berisi laporan kegiatan barang seperti masuk, keluar, dan peminjaman.</p>

<?php if (session()->getFlashdata('status_verifikasi')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('status_verifikasi') ?>
    </div>
<?php endif; ?>

<div class="card shadow mb-4">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Total Barang</th>
                <td><?= $laporan['total_barang'] ?></td>
            </tr>
            <tr>
                <th>Barang Masuk</th>
                <td><?= $laporan['barang_masuk'] ?></td>
            </tr>
            <tr>
                <th>Barang Keluar</th>
                <td><?= $laporan['barang_keluar'] ?></td>
            </tr>
            <tr>
                <th>Total Peminjaman</th>
                <td><?= $laporan['total_peminjaman'] ?></td>
            </tr>
            <tr>
                <th>Total Pengembalian</th>
                <td><?= $laporan['total_pengembalian'] ?></td>
            </tr>
            <tr>
                <th>Status Verifikasi</th>
                <td><?= $laporan['status_verifikasi'] ?></td>
            </tr>
            <tr>
                <th>Diverifikasi Oleh</th>
                <td><?= $laporan['diverifikasi_oleh'] ?? '-' ?></td>
            </tr>
            <tr>
                <th>Tanggal Verifikasi</th>
                <td><?= $laporan['tanggal_verifikasi'] ?? '-' ?></td>
            </tr>
        </table>

        <?php if ($laporan['status_verifikasi'] === 'belum'): ?>
            <form action="<?= base_url('laporan/verifikasi') ?>" method="post">
                <button type="submit" class="btn btn-success mt-3">
                    <i class="fas fa-check-circle"></i> Verifikasi Laporan
                </button>
            </form>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>