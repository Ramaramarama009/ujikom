<?php
session_start();
require '../../config/functions.php';
if (!isset($_SESSION['nik'])) {
    header("location: login.php");
}
$aktif = 'laporan';
$show = show('pengaduan');
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../config/header.php' ?>
    <title>Pengaduan - Masyarakat</title>
</head>

<body>
    <div id="wrapper">
        <?php include 'template/sidebar.php' ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <?php include 'template/navbar.php' ?>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
                                </div>
                                <div class="card-body">

                                    <table class="table table-bordered caption-top" style="vertical-align: middle;">
                                        <caption>Semua Laporan</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tgl-Pengaduan</th>
                                                <th scope="col">Isi Laporan</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($show as $row2) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no; ?></th>
                                                    <td><?= $row2['tgl_pengaduan']; ?></td>
                                                    <td><?= $row2['isi_laporan']; ?></td>
                                                    <td><img src="../../assets/image/<?= $row2['foto']; ?>" alt="" width="75px;"></td>
                                                    <td>
                                                        <p class="text-white px-2 <?= ($row2['status'] == '0' ? 'bg-danger' : ($row2['status'] == 'proses' ? 'bg-warning' : 'bg-success')); ?>"><?= $row2['status']; ?></p>
                                                    </td>
                                                </tr>
                                                <?php $no++ ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>