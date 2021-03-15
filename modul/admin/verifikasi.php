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
    <link rel="stylesheet" href="../../assets/FontAwesome/css/all.css">
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
                <div class="card">
                    <div class="card-body list-group-item list-group-item-success">
                        <div class="container-fluid">
                            <table class="table table-striped mb-3">
                                <caption>Verifikasi Masyarakat</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">No. Telepon</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($show as $row) : ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $row['nama']; ?></td>
                                            <td><?= $row['username']; ?></td>
                                            <td><?= $row['telp']; ?></td>
                                            <td><a href="validasi.php?status=<?= $row['status']; ?>&id=<?= $row['id']; ?>" class="btn <?= $row['status'] == 'Aktif' ? 'btn-success' : 'btn-secondary'; ?>"><?= $row['status']; ?></a></td>
                                            <td><button type="button" class="btn" style="background-color: #4e73df;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fas fa-trash" style="font-size:15px; color: white;"></i>
                                                </button>
                                                <!-- Modal -->
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    Apakah Anda Yakin Menghapus User ini?
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-primary">Ya</a>
                </div>
            </div>
        </div>
    </div>


    <script src=" ../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>