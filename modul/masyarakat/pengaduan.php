<?php
session_start();
require '../../config/functions.php';
$_SESSION['aktif'] = 'pengaduan';

if (isset($_POST['submit'])) {
    if (pengaduan($_POST) > 0) {
        echo 'ayam';
        die();
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Tulis Pengaduan - Masyarakat</title>
</head>

<body>

    <?php include 'template/navbar.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card shadow" style="width: 40rem;">
                    <h5 class="list-group-item list-group-item-primary text-center">Form - Pengaduan</h5>
                    <div class="card-body list-group-item list-group-item-danger">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="pengaduan" class="form-label">Isi Laporan Pengaduan</label>
                                <textarea class="form-control" id="pengaduan" rows="3" name="pengaduan"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Input Foto</label>
                                <input class="form-control" type="file" id="formFile" name="foto">
                            </div>
                            <div class="mb-3  d-flex justify-content-center">
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>