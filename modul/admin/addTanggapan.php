<?php
session_start();
require '../../config/functions.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$show = show('pengaduan');
$aktif = 'pengaduan';
$no = 1;
$statusid = $_GET['status'];

if (isset($_POST['submit'])) {

    $id = $_GET['id'];
    if ($statusid == '0') {
        addTanggapan($_POST, $id);
        $sql = mysqli_query($conn, "UPDATE pengaduan set status='proses' WHERE id_pengaduan='$id'");
    } else {
        updateTanggapan($_POST, $id);
        $sql = mysqli_query($conn, "UPDATE pengaduan set status='selesai' WHERE id_pengaduan='$id'");
    }

    echo '<script>
        alert("Berhasil Memberikan Tanggapan Tanggapan");
        window.location="pengaduan.php";
        </script>';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../config/header.php' ?>
    <title></title>
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
                        <h5 class="text-center list-group-item list-group-item-primary">Insert Tanggapan</h5>
                        <form action="" method="POST">
                            <div class="card-body list-group-item list-group-item-danger">
                                <div class="container-fluid">

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Tanggapan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="tanggapan"></textarea>
                                    </div>
                                    <div class="mb-3 ">
                                        <input type="submit" name="submit" value="Insert" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>