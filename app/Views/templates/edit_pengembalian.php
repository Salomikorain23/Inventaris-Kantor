<?= $this->include('templates/header'); ?>

<h2 class="h4 mb-4">Edit Data Pengembalian</h2>

<form action="<?= base_url('pengembalian/update/' . $pengembalian['id']) ?>" method="post">
    <div class="form-group">
        <label>Nama Peminjam</label>
        <input type="text" name="nama_peminjam" class="form-control" value="<?= esc($pengembalian['nama_peminjam']) ?>" required>
    </div>
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="<?= esc($pengembalian['nama_barang']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Pinjam</label>
        <input type="date" name="tanggal_pinjam" class="form-control" value="<?= esc($pengembalian['tanggal_pinjam']) ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Kembali</label>
        <input type="date" name="tanggal_kembali" class="form-control" value="<?= esc($pengembalian['tanggal_kembali']) ?>" required>
    </div>
    <div class="form-group">
        <label>Kondisi Barang</label>
        <input type="text" name="kondisi_barang" class="form-control" value="<?= esc($pengembalian['kondisi_barang']) ?>" required>
    </div>
    <button type="submit" class="btn btn-success mt-2">Update</button>
    <a href="<?= base_url('pengembalian') ?>" class="btn btn-secondary mt-2">Kembali</a>
</form>

<?= $this->include('templates/footer'); ?>