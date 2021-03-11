<?php
require '../../config/functions.php';
// if (!isset($_SESSION['id'])) {
//     header("location:login.php");
// }
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

    <nav class="navbar navbar-dark bg-primary mb-3">
        <!-- Navbar content -->
    </nav>
    <div class="container-fluid">
        <div class="row">
            <?php include 'template/navside.php'; ?>
            <div class="col-lg-10">
                <div class="alert alert-primary" role="alert">
                    <h5>Selamat Datang Admin</h5><br>
                    <p>Di Aplikasi Pengaduan Masyarakat</p>
                    <p>Fitur Admin :</p>
                    <ul>
                        <li>Login</li>
                        <li>Logout</li>
                        <li>Registrasi</li>
                        <li>Verifikasi dan Validasi</li>
                        <li>Memberikan Tanggapan</li>
                        <li>Generate Laporan to pdf</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>