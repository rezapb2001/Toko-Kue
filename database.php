<?php
$database = "toko_roti";
$hostname = "localhost";
$username = "root";
$password = "";

$sambung = new mysqli($hostname, $username, $password, $database);
if ($sambung->connect_error) { // jika terjadi error, matikan proses dengan die() atau exit(); 
    die('Maaf koneksi gagal: ' . $connect->connect_error);
}
