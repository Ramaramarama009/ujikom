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
    $status = $_POST['status'];

    $sql = mysqli_query($conn, "UPDATE pengaduan set status='$status' WHERE id_pengaduan='$id'");

    // var_dump($sql);
    // die();
    if (addTanggapan($_POST, $_GET['id']) > 0) {
        echo '<script>
        alert("Berhasil Menambahkan Tanggapan");
        window.location="pengaduan.php";
        </script>';
    }
    echo '<script>
    alert("Berhasil Mengubah Status");
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
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title></title>
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
                    <h5 class="text-center list-group-item list-group-item-primary">Insert Tanggapan</h5>
                    <form action="" method="POST">
                        <div class="card-body list-group-item list-group-item-danger">
                            <div class="container-fluid">

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Tanggapan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="tanggapan"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status">Change Status :</label>
                                    <select class="form-select" id="status" aria-label="Default select example" name="status">
                                        <option selected><?= $statusid ?></option>
                                        <?php if ($statusid != '0') : ?>
                                            <option value="0">0</option>
                                        <?php endif; ?>
                                        <?php if ($statusid != 'proses') : ?>
                                            <option value="proses">Proses</option>
                                        <?php endif; ?>
                                        <?php if ($statusid != 'selesai') : ?>
                                            <option value="selesai">Selesai</option>
                                        <?php endif; ?>
                                    </select>
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