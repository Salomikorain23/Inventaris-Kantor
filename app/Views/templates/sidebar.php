<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-boxes"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Inventaris Kantor</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <?php $role = session()->get('role'); ?>

    <?php if ($role === 'admin'): ?>
        <!-- Menu Barang -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('barang') ?>">
                <i class="fas fa-box"></i>
                <span>Data Barang</span></a>
        </li>

        <!-- Menu Peminjaman -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('peminjaman') ?>">
                <i class="fas fa-hand-holding"></i>
                <span>Peminjaman</span></a>
        </li>

        <!-- Menu Pengembalian -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pengembalian') ?>">
                <i class="fas fa-undo"></i>
                <span>Pengembalian</span></a>
        </li>

        <!-- Menu Laporan -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('laporan') ?>">
                <i class="fas fa-file-alt"></i>
                <span>Laporan</span></a>
        </li>

    <?php elseif ($role === 'manajer'): ?>
        <!-- Menu Laporan untuk Manajer -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('laporan') ?>">
                <i class="fas fa-file-alt"></i>
                <span>Laporan</span></a>
        </li>
    <?php endif; ?>


    <?php if (session()->get('role') === 'admin'): ?>
        <!-- Menu Log Aktivitas khusus admin -->
        <li class="nav-item <?= uri_string() === 'log' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('log') ?>">
                <i class="fas fa-history"></i>
                <span>Log Aktivitas</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->