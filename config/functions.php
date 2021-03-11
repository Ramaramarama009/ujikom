<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'ujikom';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

function login($data)
{   //Login Petugas && Admin
    global $conn;
    $username = $data['username'];
    $password = $data['password'];
    $sql = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$username' AND password='$password'");
    $row = mysqli_fetch_assoc($sql);
    if (mysqli_num_rows($sql) > 0) {
        return $row['level'];
    } else {
        return '0';
    }
}

function login1($data)
{
    //Login Masyarakat
    global $conn;
    $nik = $data['nik'];
    $nama = $data['nama'];
    $username = $data['username'];
    $password = $data['password'];

    $sql = mysqli_query($conn, "SELECT * FROM masyarakat WHERE nik='$nik' AND nama='$nama' AND username='$username' AND password='$password'");
    $row = mysqli_fetch_assoc($sql);
    if (mysqli_num_rows($sql) > 0) {
        return $row['status'];
    } else {
        return '0';
    }
}

function pengaduan($data)
{
    global $conn;
    $nik = $_SESSION['nik'];
    $tgl = date('y-m-d');
    $laporan = $data['pengaduan'];
    $foto = upImg();

    if (!$foto) {
        return false;
    }
    $sql = mysqli_query($conn, "INSERT INTO pengaduan VALUES ('','$tgl','$nik','$laporan','$foto','0')");

    return mysqli_affected_rows($conn);
}


function upImg()
{
    $nameImg = $_FILES["foto"]["name"];
    $sizeFile = $_FILES["foto"]["size"];
    $error = $_FILES["foto"]["error"];
    $tmpName = $_FILES["foto"]["tmp_name"];

    if ($error === 4) {
        echo '<script>
	alert("Masukkan gambar terlebih dahulu");
	</script>';
        return false;
    }

    $extImgValid = ['jpg', 'png', 'jpeg'];
    $ext = pathinfo($nameImg, PATHINFO_EXTENSION);
    if (!in_array($ext, $extImgValid)) {
        echo "<script>
		alert('file yang di upload bukan gambar');
		</script>";
        return false;
    }

    if ($sizeFile > 2000000) {
        echo "<script>
		alert('file terlalu besar max 2mb');
		</script>";
        return false;
    }

    $newNameImg = uniqid();
    $newNameImg .= '.';
    $newNameImg .= $ext;

    move_uploaded_file($tmpName, '../../assets/image/' . $newNameImg);

    return $newNameImg;
}

function create1($data)
{
    global $conn;
    $nik = $data['nik'];
    $nama = $data['nama'];
    $username = $data['username'];
    $password = $data['password'];
    $telp = $data['telp'];

    $sql = mysqli_query($conn, "INSERT INTO masyarakat VALUES('','$nik','$nama','$username','$password','$telp','Non Aktif')");

    return mysqli_affected_rows($conn);
}


function Laporan($data = false)
{
    global $conn;

    if ($data == false) {
        $sql = mysqli_query($conn, "SELECT * FROM pengaduan");
    } else {
        $sql = mysqli_query($conn, "SELECT * FROM pengaduan WHERE tgl_pengaduan='$data'");
    }
    return [mysqli_fetch_assoc($sql)];
}
function getId($data)
{
    global $conn;
    $sql = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$data'");
    $row = mysqli_fetch_assoc($sql);
    return $row['id_petugas'];
}
