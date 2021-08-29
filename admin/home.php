<?php

include("../database.php");

?>

<!DOCTYPE html>

<head>
    <title>Admin Rara Bakery</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../admin/home.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bgnav">
        <a class="navbar-brand text-white" href="home.php" style="font-size: 20px;">Rara Bakery</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link hmnav" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
        </div>

        <a href="tambah.php" class="btn tombol"> + Tambah Produk </a>
    </nav>


    <table class="table table-bordered container mt-5">
        <thead class="bg-headtabel">
            <tr style="color: gold; text-align: center;">
                <th scope="col"> Gambar </th>
                <th scope="col"> Nama Produk </th>
                <th scope="col"> Deskripsi </th>
                <th scope="col"> Kategori </th>
                <th scope="col"> Harga </th>
                <th scope="col"> Pengaturan </th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php

            $query = "SELECT * FROM produk ORDER BY id_produk ASC";
            $result = mysqli_query($sambung, $query);
            //mengecek error 
            if (!$result) {
                die("Query Error: " . mysqli_errno($sambung) .
                    " - " . mysqli_error($sambung));
            }

            //buat perulangan untuk element tabel
            $no = 1; //variabel untuk membuat nomor urut
            // hasil query akan disimpan dalam variabel $data dalam bentuk array
            // kemudian dicetak dengan perulangan while
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr class="tentangisi-text">
                    <td style="text-align: center;"><img src="../produk/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
                    <td><?php echo $row['nama_produk']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td><?php echo $row['kategori']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td style="width : 175px">
                        <a href="../admin/edit.php?id_produk=<?php echo $row['id_produk']; ?>" class="btn edit-hapus">Edit</a> |
                        <a href="../admin/proses-hapus.php?id_produk=<?php echo $row['id_produk']; ?>" class="btn edit-hapus">Hapus</a>
                    </td>
                </tr>

            <?php
                $no++; //untuk nomor urut terus bertambah 1 
            }
            ?>
        </tbody>
    </table>
</body>

</html>