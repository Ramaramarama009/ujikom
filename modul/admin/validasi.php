<?php
require '../../config/functions.php';

$id = $_GET['id'];
// var_dump($id);
// die();
if ($_GET['status'] == 'Aktif') {
    $sql = mysqli_query($conn, "UPDATE masyarakat set status='Non Aktif' WHERE id='$id'");
} else {
    $sql = mysqli_query($conn, "UPDATE masyarakat set status='Aktif' WHERE id='$id'");
}

echo '<script>
    alert("Berhasil Mengganti Status");
    window.location="verifikasi.php";
    </script>';
