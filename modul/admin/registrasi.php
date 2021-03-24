<?php
session_start();
include '../../config/functions.php';
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

$aktif = 'registrasi';

if (isset($_POST['regis'])) {
    if (create($_POST) > 0) {
        echo '<script>
        alert("Berhasil registrasi petugas");
        window.location="";
        </script>';
    } else {
        echo '<script>
        alert("Registrasi tidak berhasil");
        window.location="";
        </script>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../config/header.php' ?>
    <title>Registrasi</title>
</head>

<body>
    <div id="wrapper">
        <?php include 'template/sidebar.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <?php include 'template/navbar.php'; ?>
            <div id="content">
                <div class="container-fluid">
                    <div class="card">
                        <h5 class="text-center list-group-item list-group-item-primary">Form - Registrasi</h5>
                        <form action="" method="POST">
                            <div class="card-body shadow list-group-item list-group-item-danger">
                                <div class="container-fluid">

                                    <div class="mb-3">
                                        <label for="nama">Nama</label>
                                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Input Nama..">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username">Username</label>
                                        <input class="form-control" id="username" name="username" type="text" placeholder="Input Nama..">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Input Nama..">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telp">No. Telepon</label>
                                        <input class="form-control" id="telp" name="telp" type="text" placeholder="Input Nama..">
                                    </div>
                                    <div class="mb-3 d-flex Justify-content-center">
                                        <input type="submit" name="regis" value="Registrasi" class="btn btn-primary">
                                    </div>
                                </div>
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