<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() . 'admin'; ?>">
            <div class="sidebar-brand-icon">
                <i class="fas fa-school"></i>
            </div>
            <div class="sidebar-brand-text mx-3 text-lg">SIPEKA</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() . 'admin'; ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Olah Data Kelas
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() . 'kelas/addKelas'; ?>">
                <i class="fas fa-fw fa-plus"></i>
                <span>Tambah Data Kelas</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() . 'kelas/editKelas'; ?>">
                <i class="fas fa-fw fa-pen"></i>
                <span>Edit Data Kelas</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Olah Mata Kuliah
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() . 'matkul/addMatkul'; ?>">
                <i class="fas fa-fw fa-plus"></i>
                <span>Tambah Mata Kuliah</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() . 'matkul/editMatkul'; ?>">
                <i class="fas fa-fw fa-pen"></i>
                <span>Edit Mata Kuliah</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Olah Jadwal Kuliah
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() . 'jadwal/addJadwal'; ?>">
                <i class="fas fa-fw fa-plus"></i>
                <span>Tambah Jadwal Kuliah</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="fas fa-fw fa-pen"></i>
                <span>Edit Jadwal Kuliah</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->