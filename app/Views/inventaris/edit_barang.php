<?= $this->include('layouts/header'); ?>

<h2 class="h4 mb-4">Edit Data Barang</h2>

<form action="<?= base_url('barang/update/' . $barang['id']) ?>" method="post">
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" value="<?= esc($barang['nama_barang']) ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="kategori" value="<?= esc($barang['kategori']) ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" name="jumlah" value="<?= esc($barang['jumlah']) ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Kondisi</label>
        <input type="text" name="kondisi" value="<?= esc($barang['kondisi']) ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success mt-2">Update</button>
</form>

<?= $this->include('layouts/footer'); ?>