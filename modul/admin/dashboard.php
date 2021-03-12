<?php
session_start();
require '../../config/functions.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$aktif = 'dashboard';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Dashboard - Admin</title>
</head>

<body>

    <nav class="navbar navbar-dark mb-3" style="background-color: #1cc88a;">
        <!-- Navbar content -->
    </nav>
    <div class="container-fluid">
        <div class="row">
            <?php include 'template/navside.php'; ?>
            <div class="col-lg-10">
                <div class="alert alert-success" role="alert">
                    <h5>Selamat Datang <?= $_SESSION['login']; ?></h5><br>
                    <p>Di Aplikasi Pengaduan Masyarakat</p>
                    <p>Fitur <?= $_SESSION['login']; ?> :</p>
                    <ul>
                        <li>Login</li>
                        <li>Logout</li>
                        <li>Verifikasi dan Validasi</li>
                        <li>Memberikan Tanggapan</li>
                        <?php if ($_SESSION['login'] == 'Admin') : ?>
                            <li>Registrasi</li>
                            <li>Generate Laporan to pdf</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>