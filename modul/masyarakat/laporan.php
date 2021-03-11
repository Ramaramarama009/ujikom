<?php
require '../../config/functions.php';
$aktif = 'laporan';
$allData = Laporan();
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Pengaduan - Masyarakat</title>
</head>

<body>

    <?php include 'template/navbar.php' ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <table class="table table-sm table-dark caption-top" style="vertical-align: middle;">
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
                        <?php foreach ($allData as $row2) : ?>
                            <tr>
                                <th scope="row"><?= $no; ?></th>
                                <td><?= $row2['tgl_pengaduan']; ?></td>
                                <td><?= $row2['isi_laporan']; ?></td>
                                <td><img src="../../assets/image/<?= $row2['foto']; ?>" alt="" width="75px;"></td>
                                <td class="text-center <?= ($row2['status'] == '0' ? 'bg-danger' : ($row2['status'] == 'proses' ? 'bg-warning' : 'bg-success')); ?>"><?= $row2['status']; ?></td>
                            </tr>
                            <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>