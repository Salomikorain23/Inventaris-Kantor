<?= $this->include('templates/header'); ?>
<div class="text-center mb-4">
    <h1 class="h3 text-gray-800 font-weight-bold">Data Peminjaman Barang</h1>
    <p class="text-muted">Halaman untuk mencatat dan melihat daftar peminjaman barang inventaris.</p>
</div>

<a href="<?= base_url('dashboard') ?>" class="btn btn-secondary mb-3">← Kembali</a>

<h2 class="h4 mb-4">Data Peminjaman Barang</h2>

<form action="<?= base_url('peminjaman/tambah') ?>" method="post">
    <div class="form-group">
        <label>Nama Peminjam</label>
        <input type="text" name="nama_peminjam" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Tanggal Pinjam</label>
        <input type="date" name="tanggal_pinjam" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Tanggal Kembali</label>
        <input type="date" name="tanggal_kembali" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control" required>
            <option value="Dipinjam">Dipinjam</option>
            <option value="Dikembalikan">Dikembalikan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>

<hr>

<h5 class="mt-4">Daftar Peminjaman</h5>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Nama Barang</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($peminjaman as $p): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($p['nama_peminjam']) ?></td>
                <td><?= esc($p['nama_barang']) ?></td>
                <td><?= esc($p['tanggal_pinjam']) ?></td>
                <td><?= esc($p['tanggal_kembali']) ?></td>
                <td><?= esc($p['status']) ?></td>
                <td>
                    <a href="<?= base_url('peminjaman/edit/' . $p['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= base_url('peminjaman/hapus/' . $p['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->include('templates/footer'); ?>