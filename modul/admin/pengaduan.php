<?php
session_start();
require '../../config/functions.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$show = show('pengaduan LEFT join tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan
                UNION
            SELECT * FROM pengaduan RIGHT JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan
');
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
    <?php include '../../config/header.php' ?>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
    <title>Laporan Pengaduan - <?= $_SESSION['login']; ?></title>
    <style>
        .dt-buttons {
            float: right;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <?php include 'template/sidebar.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include 'template/navbar.php'; ?>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Data User(Masyarakat)</h6>
                        </div>
                        <div class="card-body shadow d-flex flex-wrap">
                            <div class="container-fluid">
                                <table class="table table-bordered mb-3" id="myTable">

                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tgl-Pengaduan</th>
                                            <th scope="col">Tgl-Tanggapan</th>
                                            <th scope="col">Pengaduan</th>
                                            <th scope="col">Tanggapan</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($show as $row) : ?>
                                            <tr>
                                                <th scope="row"><?= $no; ?></th>
                                                <td><?= $row['tgl_pengaduan']; ?></td>
                                                <td><?= $row['tgl_tanggapan'] ? $row['tgl_tanggapan'] : 'Belum DiTanggapi' ?></td>
                                                <td><?= $row['isi_laporan']; ?></td>
                                                <td><?= $row['tanggapan'] ? $row['tanggapan'] : 'Belum DiTanggapi' ?></td>
                                                <td>
                                                    <p class="px-2 mx-2 text-white <?= ($row['status'] == 'selesai' ? 'bg-success' : ($row['status'] == 'proses' ? 'bg-warning' : 'bg-danger')); ?> rounded"><?= ucwords($row['status']); ?></p>
                                                </td>
                                                <td><a href="addTanggapan.php?id=<?= $row['id_pengaduan']; ?>&status=<?= $row['status']; ?>" class="btn btn-info <?= $row['status'] == 'selesai' ? 'disabled' : ''; ?>">Tanggapan</a></td>
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


        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets//js/jquery.js"></script>
        <?php include '../../config/footer.php' ?>
        <script>
            $('.table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'pdf', 'excel'
                ]
            });
        </script>
</body>

</html>