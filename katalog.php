<?php

include("database.php");

?>

<!DOCTYPE html>

<head>
    <title>Rara Bakery</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script type="text/javascript" src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/allstyle.css">
    <link rel="stylesheet" type="text/css" href="css/stylekatalog.css">
    <link rel="stylesheet" type="text/css" href="nav/navbarstyle.css">
    <link rel="stylesheet" type="text/css" href="footer/footerstyle.css ">
</head>

<body>

    <!-- kepala -->
    <div class="kepala">

        <div class="row">
            <div class="col-sm-6">
                <a href="cart.php"><img src="gambar/cart.png" alt="" width="50px"></a>
            </div>

            <div class="col-sm-6">
                <?php
                session_start();

                include("database.php");

                if (empty($_SESSION['username'])) { ?>
                    <div class="log-reg">
                        <a href="login.php" class="loggis">Log in</a>
                        <span style="color: gold; margin-right: 5px; margin-left: 5px;"> | </span>
                        <a href="register.php" class="loggis">Register</a>
                    </div>
                <?php
                } else {
                    $username = $_SESSION['username'];

                    $query = "SELECT * FROM pembeli WHERE username ='$username'";
                    $result = mysqli_query($sambung, $query);
                    // jika data gagal diambil maka akan tampil error berikut
                    if (!$result) {
                        die("Query Error: " . mysqli_errno($sambung) .
                            " - " . mysqli_error($sambung));
                    }

                    $data = mysqli_fetch_assoc($result); ?>
                    <div class="log-reg">
                        <span style="color: white;"><?php echo $data["nama"];  ?> </span>
                        <span style="color: gold; margin-right: 5px; margin-left: 5px;"> | </span>
                        <a href="proses-logout.php" class="loggis">Log Out</a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 namatoko">
                <font face="Bahnschrift ">Rara</font>
                <font face="Allison Script ">Bakery</font>
            </div>

            <div class="col-sm-4" style="font-size: 20px;">
                <p class="text-white">Beji, Taji, Prambanan, Klaten</p>
                <p style="color: gold;">Jam Oprasional (Setiap Hari) : <br> 09:00-17.00</p>
            </div>
        </div>
    </div> <!-- kepala selesai -->

    <!-- Navbar --> <?php include("nav/navbar.html") ?>

    <div class="batas"></div>

    <div class="row" style="margin: 15px;">
        <?php

        $query = "SELECT * FROM produk ORDER BY id_produk ASC";
        $result = mysqli_query($sambung, $query);
        //mengecek error
        if (!$result) {
            die("Query Error: " . mysqli_errno($sambung) .
                " - " . mysqli_error($sambung));
        }

        $no = 1; //variabel untuk membuat nomor urut
        // hasil query akan disimpan dalam variabel $data dalam bentuk array
        // kemudian dicetak dengan perulangan while
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <div class="col-sm-3">
                <div class="card mb-5" style="width: 18rem; border-color: rgb(117, 77, 48);">
                    <span class="nama-produk"> <?php echo $row['nama_produk']; ?> <br></span>
                    <img src="produk/<?php echo $row['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px; margin-top: 15px;" class="card-img-top mx-auto">
                    <div class="card-body">
                        <p class="deskripsi-harga">
                            <?php echo $row['deskripsi']; ?><br>
                            <?php echo $row['harga']; ?><br>
                        </p>
                        <a href="proses-beli.php?id_produk=<?php echo $row['id_produk']; ?>" class=" btn tombolkranjang"><img src="gambar/cart1.png" alt="" width="35px"></a>
                    </div>
                </div>
            </div>
        <?php
            $no++; //untuk nomor urut terus bertambah 1 
        }
        ?>
    </div>

    <!-- Footer --> <?php include("footer/footer.html") ?>
</body>

</html>