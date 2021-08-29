<?php
session_start();

if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
}

include("database.php");

$sum = 0;
?>

<!DOCTYPE html>

<head>
    <title>Rara Bakery</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script type="text/javascript" src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/allstyle.css">
    <link rel="stylesheet" type="text/css" href="css/stylekatalog.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
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

    <h1 style="color: rgb(117, 77, 48); text-align:center; margin: 35px;"> Isi Keranjang </h1>
    <a href="katalog.php" class="btn tombolbayar">Lanjutkan Belanja</a>

    <div class="row">
        <div class="col-sm-8">

            <?php

            if (empty($_SESSION['keranjang'])) { ?>
                <h1 style="color: rgb(117, 77, 48); text-align:center; margin: 35px;"> Anda Belum Memilih Produk </h1>
                <?php
            } else {
                foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) :

                    $query = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
                    $result = mysqli_query($sambung, $query);

                    $data = mysqli_fetch_assoc($result);
                    $total = $data['harga'] * $jumlah;
                    $sum = $total + $sum;

                ?>
                    <div style="padding-left: 25px;">
                        <div class="row" style="border: 1px solid; border-color: rgb(117, 77, 48); margin: 15px; padding: 15px;">
                            <div class="col-sm-2">
                                <img src="produk/<?php echo $data['gambar']; ?>" style="width: 120px;margin: 15px;" class="card-img-top mx-auto">
                            </div>
                            <div class="col-sm-4 m-5">
                                <h3 style="color: rgb(117, 77, 48);"> <?php echo $data['nama_produk']; ?> <br></h3>
                                <p class="deskripsi-harga">
                                    Harga : Rp. <?php echo $data['harga']; ?><br>
                                    Jumlah Kue :<?php echo $jumlah; ?>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h4 style="color:rgb(117, 77, 48); font-family:'Arial Narrow', ; text-align:right;"> Rp. <?php echo $total; ?></h4>
                            </div>
                            <div class="col-sm-2">
                                <a href="hapus-keranjang.php?id_produk=<?php echo $id_produk; ?>" class="btn btn-danger btn-xs">Hapus</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            <?php }
            ?>
        </div>

        <div class="col-sm-4">
            <div class="card" style="width: 20rem; border-color: rgb(117, 77, 48); text-align: center; padding: 25px; margin: 15px;">
                <h2>Total : Rp. <?php echo $sum; ?></h2>
                <br>
                <br>
                <br>
                <a href="checkout.php" class="btn tombolbayar">Checkout</a>
            </div>
        </div>
    </div>

    <!-- Footer --> <?php include("footer/footer.html") ?>
</body>

</html>