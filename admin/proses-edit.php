<?php

include '../database.php';

$id           = $_POST['id_produk'];
$gambar       = $_FILES['gambar']['name'];
$nama_produk  = $_POST['nama_produk'];
$deskripsi    = $_POST['deskripsi'];
$kategori     = $_POST['kategori'];
$harga        = $_POST['harga'];

//cek dulu jika merubah gambar jalankan
if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 9999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../produk/' . $nama_gambar_baru); //memindah file gambar ke folder gambar

        // jalankan query UPDATE berdasarkan ID 
        $query  = "UPDATE produk SET gambar = '$nama_gambar_baru', nama_produk = '$nama_produk', deskripsi = '$deskripsi', kategori = '$kategori', harga = '$harga'";
        $query .= "WHERE id_produk = '$id'";
        $result = mysqli_query($sambung, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($sambung) .
                " - " . mysqli_error($sambung));
        } else {
            //tampil alert dan akan redirect ke halaman beranda.php
            echo "<script>window.location='home.php';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_user.php';</script>";
    }
} else {
    // jalankan query UPDATE jika gambar tidak diganti
    $query  = "UPDATE produk SET nama_produk = '$nama_produk', deskripsi = '$deskripsi', kategori = '$kategori', harga = '$harga'";
    $query .= "WHERE id_produk = '$id'";
    $result = mysqli_query($sambung, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($sambung) .
            " - " . mysqli_error($sambung));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        echo "<script>window.location='home.php';</script>";
    }
}
