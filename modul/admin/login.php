<?php
include '../../config/functions.php';

if (isset($_POST['login'])) {
    if (login2($_POST) == 'admin') {
        session_start();
        $_SESSION['id'] = getId($_POST['username']);
        $_SESSION['login'] = 'Admin';
        echo '<script>
        alert("Selamat Datang Admin");
        window.location="dashboard.php";
        </script>';
    } elseif (login2($_POST) == 'petugas') {
        session_start();
        $_SESSION['id'] = getId($_POST['username']);
        $_SESSION['login'] = 'Petugas';
        echo '<script>
        alert("Selamat Datang Petugas");
        window.location="dashboard.php";
        </script>';
    } else {
        echo '<script>
        alert("Periksa kembali data anda");
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
    <title>Login - Admin</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col mt-3 d-flex justify-content-center">
                <div class="card shadow" style="width: 25rem;">
                    <div class="list-group-item list-group-item-primary">
                        <h5 class="text-center">Login - Admin</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input class="form-control" id="username" name="username" type="text" placeholder="Username..">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password..">
                            </div>
                            <div class="mb-2">
                                <input type="submit" name="login" value="Login" class="btn btn-primary col-sm-12">
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