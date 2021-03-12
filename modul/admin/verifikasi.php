<?php
session_start();
require '../../config/functions.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$aktif = 'verifikasi';
$show = show('masyarakat');
$no = 1;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Verifikasi & Validasi</title>
</head>

<body>
    <nav class="navbar navbar-dark mb-3" style="background-color: #1cc88a;">
        <!-- Navbar content -->
    </nav>

    <div class="container-fluid">
        <div class="row">
            <?php include 'template/navside.php' ?>
            <div class="col-lg-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($show as $row) : ?>
                            <tr>
                                <th scope="row"><?= $no; ?></th>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['telp']; ?></td>
                                <td><a href="validasi.php?status=<?= $row['status']; ?>&id=<?= $row['id']; ?>" class="btn <?= $row['status'] == 'Aktif' ? 'btn-success' : 'btn-danger'; ?>"><?= $row['status']; ?></a></td>
                            </tr>
                            <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>