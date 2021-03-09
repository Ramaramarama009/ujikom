<?php
session_start();
require '../../config/functions.php';

if (!isset($_SESSION['nik'])) {
    header("location: login.php");
}
$_SESSION['aktif'] = 'dashboard';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Dashboard - Masyarakat</title>
</head>

<body>

    <?php include 'template/navbar.php'; ?>


    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="alert alert-info" role="alert">
                    <h2 class="mb-5">Selamat Datang YTH <?= ucwords($_SESSION['nama']); ?></h2>
                    <p>Fitur Masyarakat :</p>
                    <ul>
                        <li>Login</li>
                        <li>Registrasi</li>
                        <li>Menulis Pengaduan</li>
                        <li>Logout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>