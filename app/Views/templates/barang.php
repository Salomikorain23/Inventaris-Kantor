<?= $this->include('templates/header'); ?>
<h1 class="h3 mb-4 text-gray-800">Data Barang Inventaris</h1>
<p>Halaman untuk menampilkan daftar barang yang tercatat di inventaris kantor.</p>
<h2 class="h5 mb-3">Tambah Data Barang</h2>
<form action="<?= base_url('barang/tambah') ?>" method="post">
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Kondisi</label>
        <input type="text" name="kondisi" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>

<hr>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($barang as $b): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($b['nama_barang']) ?></td>
                <td><?= esc($b['kategori']) ?></td>
                <td><?= esc($b['jumlah']) ?></td>
                <td><?= esc($b['kondisi']) ?></td>
                <td>
                    <a href="<?= base_url('barang/edit/' . $b['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= base_url('barang/hapus/' . $b['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('templates/footer'); ?>