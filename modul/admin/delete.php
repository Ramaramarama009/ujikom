<?php
require '../../config/functions.php';
$id = $_GET['id'];


$sql = mysqli_query($conn, "DELETE FROM masyarakat WHERE id='$id'");


echo '<script>
        alert("Berhasil Menghapus User");
        window.location="verifikasi.php";
        </script>';
