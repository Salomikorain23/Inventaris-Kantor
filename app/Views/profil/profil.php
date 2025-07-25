<?= $this->include('layouts/header'); ?>
<h1 class="h3 mb-4 text-gray-800">Profil Pengguna</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<div class="card shadow">
    <div class="card-body">
        <p><strong>Nama:</strong> <?= esc($user['nama']) ?></p>
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Role:</strong> <?= esc($user['role']) ?></p>

        <a href="<?= base_url('profil/edit') ?>" class="btn btn-primary">Edit Profil</a>
        <a href="<?= base_url('ubah-password') ?>" class="btn btn-warning">Ubah Password</a>
    </div>
</div>
<a href="<?= base_url('dashboard') ?>" class="btn btn-secondary mt-3">Kembali</a>

<?= $this->include('layouts/footer'); ?>