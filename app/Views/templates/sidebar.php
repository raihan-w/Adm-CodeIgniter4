<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url(); ?>/img/logo desa.png" alt="logo" style="width: 40px;">
        </div>
        <div class="sidebar-brand-text mx-3">Sistem Desa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kependudukan
    </div>
    <!-- Nav Item - Arsip Kependudukan -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-address-book"></i>
            <span>Data Penduduk</span></a>
    </li>
    <?php if (has_permission('manage_data')) : ?>
        <!-- Nav Item - Domisili -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kependudukan/lokal'); ?>">
                <i class="fas fa-id-card"></i>
                <span>Data Warga</span></a>
        </li>
        <!-- Nav Item - WNA -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kependudukan/asing'); ?>">
                <i class="fas fa-id-card"></i>
                <span>Data Warga Negara Asing</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Layanan Surat
    </div>
    <!-- Nav Item - Riwayat Permohonan -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-folder"></i>
            <span>Surat Keluar</span></a>
    </li>
    <?php if (has_permission('manage_service')) : ?>
        <!-- Nav Item - Surat Keterangan -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuket" aria-expanded="true" aria-controls="collapseSuket">
                <i class="fas fa-file-alt"></i>
                <span>Surat Keterangan</span>
            </a>
            <div id="collapseSuket" class="collapse" aria-labelledby="headingSuket" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Keterangan</a>
                    <a class="collapse-item" href="#">Domisili</a>
                    <a class="collapse-item" href="#">Domisili WNA</a>
                    <a class="collapse-item" href="#">Beda Nama</a>
                    <a class="collapse-item" href="#">Beda Nama II</a>
                    <a class="collapse-item" href="#">SKTM</a>
                    <a class="collapse-item" href="#">Kematian</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Bidik Misi -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-file-alt"></i>
                <span>Bidik Misi</span></a>
        </li>
        <!-- Nav Item - Pengantar -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-file-alt"></i>
                <span>Pengantar</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if (in_groups('administrator')) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
        </div>
        <!-- Nav Item - My Profile -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user'); ?>">
                <i class="fas fa-users"></i>
                <span>Users</span></a>
        </li>
        <!-- Nav Item - Permission  -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('permission'); ?>">
                <i class="fas fa-user-cog"></i>
                <span>Permission</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    <?php endif; ?>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <div class="copyright text-center my-auto">
        <small><span>Copyright &copy; <?= date('Y'); ?></span></small>
    </div>

</ul>