<?php
include '../database.php';

$gambar       = $_FILES['gambar']['name'];
$nama_produk  = $_POST['nama_produk'];
$deskripsi    = $_POST['deskripsi'];
$kategori     = $_POST['kategori'];
$harga        = $_POST['harga'];


//cek gambar jalankan coding
if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 9999);
    $gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../produk/' . $gambar_baru); //memindah file gambar ke folder gambar
        $query = "INSERT INTO produk (gambar, nama_produk, deskripsi, kategori, harga) VALUES ('$gambar_baru', '$nama_produk', '$deskripsi', '$kategori', '$harga')";
        $result = mysqli_query($sambung, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_error($sambung) .
                " - " . mysqli_error($sambung));
        } else {
            //tampil alert dan akan redirect ke halaman home.php
            echo "<script>window.location='home.php';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
    }
} else {
    $query = "INSERT INTO produk (gambar, nama_produk, deskripsi, kategori, harga) VALUES ('', '$nama_produk', '$deskripsi', '$kategori', '$harga')";
    $result = mysqli_query($sambung, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($sambung) .
            " - " . mysqli_error($sambung));
    } else {
        //tampil alert dan akan redirect ke halaman beranda.php
        echo "<script>alert('Produk berhasil ditambah.');window.location='home.php';</script>";
    }
}
