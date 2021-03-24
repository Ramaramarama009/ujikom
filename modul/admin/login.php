<?php
include '../../config/functions.php';

if (isset($_POST['login'])) {
    if (login2($_POST) == 'admin') {
        session_start();
        $_SESSION['id'] = getId($_POST['username']);
        $_SESSION['login'] = 'Admin';
        $_SESSION['alert'] = 'alert';
        echo '<script>     
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
    <?php include '../../config/header.php'; ?>
    <title>Login - Admin</title>
</head>

<body class="bg-gradient-success">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin/Petugas</h1>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block">
                                    </form>
                                    <hr>
                                    <div class="text-center mb-2">
                                        <a class="small" href="../masyarakat/login.php">Login sebagai Masyarakat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>