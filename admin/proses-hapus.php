<?php
include '../database.php';
$id = $_GET["id_produk"];
//mengambil id yang ingin dihapus

//jalankan query DELETE untuk menghapus data
$query = "DELETE FROM produk WHERE id_produk='$id' ";
$hasil_query = mysqli_query($sambung, $query);

//periksa query, apakah ada kesalahan
if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_errno($sambung) .
        " - " . mysqli_error($sambung));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='home.php';</script>";
}
