<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ubah Password</title>
    <link rel="stylesheet" href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>">
    <link href="<?= base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Ubah Password</h4>

                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                        <?php endif; ?>

                        <form action="<?= base_url('proses-ubah-password') ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username yang terdaftar" required>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" name="new_password" id="newPasswordInput" class="form-control" placeholder="Password baru" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" onclick="togglePassword()" style="cursor: pointer;">
                                            <i class="fas fa-eye" id="eyeIcon"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block">Perbarui Password</button>

                            <div class="text-center mt-3">
                                <a href="<?= base_url('login') ?>">Kembali ke Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toggle Password Script -->
    <script>
        function togglePassword() {
            const input = document.getElementById('newPasswordInput');
            const icon = document.getElementById('eyeIcon');
            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = "password";
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>

    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>
</body>

</html>