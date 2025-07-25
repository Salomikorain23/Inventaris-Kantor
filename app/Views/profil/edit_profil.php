<?= $this->include('layouts/header'); ?>

<h1 class="h3 mb-4 text-gray-800">Edit Profil</h1>

<form action="<?= base_url('profil/update') ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" value="<?= esc($user['nama']) ?>" required>
    </div>

    <div class="form-group">
        <label>Foto Profil</label><br>
        <img src="<?= base_url('img/' . $user['foto']) ?>" width="100" class="mb-2 rounded-circle"><br>
        <input type="file" name="foto" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= base_url('profil') ?>" class="btn btn-secondary">Batal</a>


</form>

<?= $this->include('layouts/footer'); ?>