<?= $this->include('templates/header'); ?>

<h2 class="h4 mb-4">Edit Data Peminjaman</h2>

<form action="<?= base_url('peminjaman/update/' . $peminjaman['id']) ?>" method="post">
    <div class="form-group">
        <label>Nama Peminjam</label>
        <input type="text" name="nama_peminjam" class="form-control" value="<?= esc($peminjaman['nama_peminjam']) ?>" required>
    </div>
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="<?= esc($peminjaman['nama_barang']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Pinjam</label>
        <input type="date" name="tanggal_pinjam" class="form-control" value="<?= esc($peminjaman['tanggal_pinjam']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Kembali</label>
        <input type="date" name="tanggal_kembali" class="form-control" value="<?= esc($peminjaman['tanggal_kembali']) ?>" required>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control" required>
            <option value="Dipinjam" <?= $peminjaman['status'] === 'Dipinjam' ? 'selected' : '' ?>>Dipinjam</option>
            <option value="Dikembalikan" <?= $peminjaman['status'] === 'Dikembalikan' ? 'selected' : '' ?>>Dikembalikan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success mt-2">Update</button>
    <a href="<?= base_url('peminjaman') ?>" class="btn btn-secondary mt-2">Batal</a>
</form>

<?= $this->include('templates/footer'); ?>