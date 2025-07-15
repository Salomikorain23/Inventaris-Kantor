<?= $this->include('templates/header'); ?>

<h2 class="h4 mb-4">Data Pengembalian Barang</h2>

<form action="<?= base_url('pengembalian/tambah') ?>" method="post">
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
        <label>Kondisi Barang</label>
        <input type="text" name="kondisi_barang" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>

<hr>

<h5 class="mt-4">Daftar Pengembalian</h5>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Nama Barang</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Kondisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($pengembalian as $p): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($p['nama_peminjam']) ?></td>
                <td><?= esc($p['nama_barang']) ?></td>
                <td><?= esc($p['tanggal_pinjam']) ?></td>
                <td><?= esc($p['tanggal_kembali']) ?></td>
                <td><?= esc($p['kondisi_barang']) ?></td>
                <td>
                    <a href="<?= base_url('pengembalian/edit/' . $p['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= base_url('pengembalian/hapus/' . $p['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->include('templates/footer'); ?>