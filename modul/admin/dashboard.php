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
    <?php include '../../config/header.php' ?>
    <title>Dashboard - Admin</title>
</head>

<body>

    <div id="wrapper">
        <?php include 'template/sidebar.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include 'template/navbar.php'; ?>
                <div class="container-fluid">

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
                text: 'Selamat Datang <?= $_SESSION['login']; ?>',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        }
    </script>
    <?php unset($_SESSION['alert']) ?>
</body>

</html>