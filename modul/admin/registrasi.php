<?php


$aktif = 'registrasi';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Registrasi</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary mb-3">
        <!-- Navbar content -->
    </nav>
    <div class="container-fluid">
        <div class="row">
            <?php include 'template/navside.php'; ?>
            <div class="col-lg-10">
                <div class="card">
                    <h5 class="text-center list-group-item list-group-item-action list-group-item-primary">Form - Registrasi</h5>
                    <form action="">
                        <div class="card-body">
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
                            <div class="mb-3">
                                <input type="submit" name="regis" value="Registrasi" class="btn btn-primary">
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