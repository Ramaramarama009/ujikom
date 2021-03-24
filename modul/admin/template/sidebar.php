<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $aktif == 'dashboard' ? 'active' : ''; ?>">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item <?= $aktif == 'registrasi' ? 'active' : ''; ?>">
        <a class="nav-link" href="registrasi.php">
            <i class="fa fa-edit"></i>
            <span>Registrasi</span></a>
    </li>
    <li class="nav-item <?= $aktif == 'verifikasi' ? 'active' : ''; ?>">
        <a class="nav-link" href="verifikasi.php">
            <i class="fa fa-table"></i>
            <span>Verifikasi & Validasi</span></a>
    </li>
    <li class=" nav-item <?= $aktif == 'pengaduan' ? 'active' : ''; ?>">
        <a class="nav-link" href="pengaduan.php">
            <i class="fa fa-table"></i>
            <span>Pengaduan & Tanggapan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>