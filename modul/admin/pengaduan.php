<?php
session_start();
require '../../config/functions.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$show = show('pengaduan');
$aktif = 'pengaduan';
$no = 1;
// INNER JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
    <title>Laporan Pengaduan - <?= $_SESSION['login']; ?></title>
</head>

<body>
    <nav class="navbar navbar-dark mb-3" style="background-color: #1cc88a;">
        <!-- Navbar content -->
    </nav>
    <div class="container-fluid">
        <div class="row">
            <?php include 'template/navside.php' ?>
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body list-group-item list-group-item-success">
                        <div class="container-fluid">
                            <table class="table table-striped mb-3" id="myTable">
                                <caption>Verifikasi Masyarakat</caption>
                                <thead>
                                    <tr class="">
                                        <th scope="col">No</th>
                                        <th scope="col">Tgl-Pengaduan</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">No. Telepon</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($show as $row) : ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $row['tgl_pengaduan']; ?></td>
                                            <td><?= $row['nik']; ?></td>
                                            <td><?= $row['isi_laporan']; ?></td>
                                            <td>
                                                <p class="px-2 mx-2 <?= $row['status'] == 'selesai' ? 'bg-success' : $row['status'] == 'proses' ? 'bg-warning' : 'bg-danger'; ?> rounded"><?= ucwords($row['status']); ?></p>
                                            </td>
                                            <td><a href="addTanggapan.php?id=<?= $row['id_pengaduan']; ?>&status=<?= $row['status']; ?>" class="btn btn-info">Tanggapan</a></td>
                                        </tr>
                                        <?php $no++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="my-3">
                    <a href="tanggapan.php" class="">Laporan yang di Tanggapi</a>
                </div>
            </div>
        </div>
    </div>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets//js/jquery.js"></script>
</body>

</html>