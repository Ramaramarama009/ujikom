<div class="col-lg-2">
    <div class="list-group">
        <a href="dashboard.php" class="list-group-item  <?= ($aktif == 'dashboard') ? 'list-group-item-primary' : 'list-group-item-action'; ?>">Dashboard</a>
        <a href="registrasi.php" class="list-group-item  <?= ($aktif == 'registrasi') ? 'list-group-item-primary' : 'list-group-item-action'; ?>">Registrasi</a>
        <a href="verifikasi.php" class="list-group-item  <?= ($aktif == 'verifikasi') ? 'list-group-item-primary' : 'list-group-item-action'; ?>">Verifikasi & Validasi</a>
        <a href="tanggapan.php" class="list-group-item  <?= ($aktif == 'tanggapan') ? 'list-group-item-primary' : 'list-group-item-action'; ?>">Tanggapan</a>
        <hr>
        <a href="logout.php" class="list-group-item list-group-item-action">Logout</a>
    </div>
</div>