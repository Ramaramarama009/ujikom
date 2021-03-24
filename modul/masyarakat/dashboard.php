<?php
session_start();
require '../../config/functions.php';

if (!isset($_SESSION['nik'])) {
    header("location: login.php");
}
$aktif = 'dashboard';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../config/header.php' ?>
    <title>Dashboard - Masyarakat</title>
</head>

<body>


    <div id="wrapper">
        <?php include 'template/sidebar.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include 'template/navbar.php'; ?>
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-info" role="alert">
                                <h2 class="mb-5">Selamat Datang <?= ucwords($_SESSION['username']); ?></h2>
                                <p>Di Aplikasi Pengaduan Masyarakat</p>
                                <p>Fitur Masyarakat :</p>
                                <ul>
                                    <li>Login</li>
                                    <li>Registrasi</li>
                                    <li>Melihat Laporan Pengaduan</li>
                                    <li>Menulis Pengaduan</li>
                                    <li>Logout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php if ($_SESSION['alert']) : ?>
        <div class="flash-data" data-flashdata="<?= $_SESSION['alert']; ?>">
        </div>
    <?php endif; ?>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/jquery-3.5.1.js"></script>
    <script>
        const flashData = $('.flash-data').data('flashdata');

        if (flashData) {
            Swal.fire({
                title: 'Verified',
                text: 'Selamat Datang <?= $_SESSION['username']; ?>',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        }
    </script>
    <?php unset($_SESSION['alert']) ?>
</body>

</html>