<?php
session_start();
require '../../config/functions.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$show = show('pengaduan INNER JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan');
$aktif = 'pengaduan';
$no = 1;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <title>Laporan Pengaduan & Tanggapan - <?= $_SESSION['login']; ?></title>
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
                    <div class="card-body">
                        <div class="container-fluid">
                            <table class="table table-striped mb-3" id="myTable">
                                <caption>Verifikasi Masyarakat</caption>
                                <thead>
                                    <tr class="">
                                        <th scope="col">No</th>
                                        <th scope="col">Tgl-Pengaduan</th>
                                        <th scope="col">tgl_tanggapan</th>
                                        <th scope="col">Isi Pengaduan</th>
                                        <th scope="col">Isi Tanggapan</th>
                                        <th scope="col">Gambar/Foto</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($show as $row) : ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $row['tgl_pengaduan']; ?></td>
                                            <td><?= $row['tgl_tanggapan']; ?></td>
                                            <td><?= $row['isi_laporan']; ?></td>
                                            <td><?= $row['tanggapan']; ?></td>
                                            <td><img src="../../assets/image/<?= $row['foto']; ?>" width="75" alt=""></td>

                                        </tr>
                                        <?php $no++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="my-3">
                    <a href="pengaduan.php" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/jquery.js"></script>
    <?php if ($_SESSION['login'] == 'Admin') :    ?>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    <?php endif;
    ?>
</body>

</html>