<?php
require '../../config/functions.php';


if (isset($_POST['submit'])) {
    if (login1($_POST) == 'Aktif') {
        session_start();
        $_SESSION['nik'] = $_POST['nik'];
        $_SESSION['username'] = $_POST['username'];
        echo '<script>
        alert("Selamat Datang ' . ucwords($_POST['username']) . '");
        window.location="dashboard.php";
        </script>';
    } elseif (login1($_POST) == 'Non Aktif') {
        echo '<script>
        alert("Akun Anda belum aktif silahkan hubungi admin");
        window.location="";
        </script>';
    } else {
        echo '<script>
        alert("Periksa data anda atau registrasi terlebih dahulu");
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
    <title>Login - Masyarakat</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <div class="card shadow" style="width: 25rem;">
                    <h5 class="list-group-item list-group-item-primary text-center">Login - Masyarakat</h5>
                    <div class="card-body list-group-item list-group-item-success">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input class="form-control" id="nik" name="nik" type="text" placeholder="Input Nik Kamu..">
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
                                <input type="submit" name="submit" value="Login" class="btn btn-primary col-sm-12">
                            </div>
                            <div class="mb-3 text-center">
                                <a href="register.php" class="text-decoration-none">Dont have a account? Click this</a>
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