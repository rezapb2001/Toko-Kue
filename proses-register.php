<?php
include 'database.php';

$nama        = $_POST['nama'];
$username    = $_POST['username'];
$password    = $_POST['password'];
$no_tlp      = $_POST['no_tlp'];
$alamat      = $_POST['alamat'];

$query = "INSERT INTO pembeli (id_pembeli, nama, username, password, no_tlp, alamat) VALUES ('', '$nama', '$username', '$password','$no_tlp', '$alamat')";
$result = mysqli_query($sambung, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($sambung) .
        " - " . mysqli_error($sambung));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    echo "<script>window.location='index.php';</script>";
}
