<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Log Aktivitas Pengguna</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Role</th>
            <th>Aktivitas</th>
            <th>Waktu</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($logs as $i => $log): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= esc($log['username']) ?></td>
                <td><?= esc($log['role']) ?></td>
                <td><?= esc($log['aktivitas']) ?></td>
                <td><?= esc($log['waktu']) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>