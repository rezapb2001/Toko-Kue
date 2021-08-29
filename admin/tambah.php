<?php

include("../database.php");

?>

<!DOCTYPE html>

<head>
    <title>Admin Rara Bakery</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../admin/styletambah.css">
</head>

<body>

    <h1 class="text-center m-3">Tambah Produk</h1>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 500px; padding: 25px">
            <form method="POST" action="../admin/proses-tambah.php" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="gambar" class="col-sm-4 col-form-label"> Gambar </label>
                    <input type="file" name="gambar" required="required" class="btn" />
                </div>

                <div class="form-group row">
                    <label for="nama_produk" class="col-sm-4 col-form-label"> Nama Produk </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-4 col-form-label"> Deskripsi </label>
                    <div class="col-sm-6">
                        <textarea name="deskripsi" id="deskripsi" cols="20" rows="5" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label"> Kategori </label>
                    <div class="col-sm-6">
                        <select class="custom-select" id="kategori" name="kategori">
                            <option value="Bread"> Bread </option>
                            <option value="Traditional Snack"> Traditional Snack </option>
                            <option value="Pastry"> Pastry </option>
                            <option value="Cake"> Cake </option>
                            <option value="Cup Cake"> Cup Cake </option>
                            <option value="Snack"> Snack </option>
                            <option value="Brownies"> Brownies </option>
                            <option value="Package"> Package </option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="harga" class="col-sm-4 col-form-label"> Harga </label>
                    <div class="col-sm-6">
                        <input type="text" class=" form-control" id="harga" name="harga" placeholder="Harga">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <button type="submit" class="btn tombol-tambah m-2">Simpan</button>
                    </div>
                    <div class="col-sm-3">
                        <a href="home.php" class="btn tombol-tambah m-2"> Batal </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>