<?php
session_start();

// menghubungkan dengan koneksi 
include("database.php");

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($sambung, "SELECT * FROM pembeli WHERE username='$username' and password='$password'")
    or die(mysqli_error($sambung));

// menghitung jumlah data yang ditemukan 
$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
}
