<?php
require '../../config/functions.php';

if (isset($_POST['submit'])) {
    if (create($_POST) > 0) {
        echo '<script>
        alert("Berhasil membuat akun");
        window.location="login.php";
        </script>';
    } else {
        echo '<script>
        alert("gagal membuat akun");
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
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Register - Masyarakat</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <div class="card shadow" style="width: 25rem;">
                    <h5 class="list-group-item list-group-item-primary text-center">Register - Masyarakat</h5>
                    <div class="card-body list-group-item list-group-item-success">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input class="form-control" id="nik" name="nik" type="text" placeholder="Input Nik Kamu..">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input class="form-control" id="nama" name="nama" type="text" placeholder="Input Nama Kamu..">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input class="form-control" id="U" name="username" type="text" placeholder="Input Username Kamu..">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="Input Password Kamu..">
                            </div>
                            <div class="mb-3">
                                <label for="telp" class="form-label">No. Telp</label>
                                <input class="form-control" id="telp" name="telp" type="text" placeholder="Input Nomor Kamu..">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="submit" value="Create" class="btn btn-primary col-sm-12">
                            </div>
                            <div class="mb-3 text-center">
                                Already have an account?<a href="login.php" class="text-decoration-none">Click this to Sign in</a>
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