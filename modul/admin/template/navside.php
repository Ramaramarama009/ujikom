<div class="col-lg-2">
    <div class="card" style="width: auto;">
        <div class="card-body">
            <h6>Aplikasi Pengaduan Masyarakat</h6>
        </div>
    </div>
    <hr class="my-3">
    <div class="list-group">
        <a href="dashboard.php" class="list-group-item  <?= ($aktif == 'dashboard') ? 'list-group-item-primary' : 'list-group-item-action'; ?>">Dashboard</a>
        <?php if ($_SESSION['login'] == 'Admin') : ?>
            <a href="registrasi.php" class="list-group-item  <?= ($aktif == 'registrasi') ? 'list-group-item-primary' : 'list-group-item-action'; ?>">Registrasi</a>
        <?php endif; ?>
        <a href="verifikasi.php" class="list-group-item  <?= ($aktif == 'verifikasi') ? 'list-group-item-primary' : 'list-group-item-action'; ?>">Verifikasi & Validasi</a>
        <a href="pengaduan.php" class="list-group-item  <?= ($aktif == 'pengaduan') ? 'list-group-item-primary' : 'list-group-item-action'; ?>">Laporan Pengaduan</a>
        <hr>
        <a href="logout.php" class="list-group-item list-group-item-action">Logout</a>
    </div>
</div>