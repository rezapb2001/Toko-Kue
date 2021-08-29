<?php
session_start();

$id_produk = $_GET['id_produk'];

unset($_SESSION['keranjang'][$id_produk]);
echo "<script>location = 'cart.php';</script>";
