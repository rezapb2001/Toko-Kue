<!DOCTYPE html>

<head>
    <title>Rara Bakery</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script type="text/javascript" src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/allstyle.css">
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

    <div style="margin-top: 30px; margin-bottom: 30px; padding-left: 20px; padding-right: 20px;">
        <div class="row">
            <div class="col-sm-6">
                <img src="gambar/cake1.jpg" alt="" width="600px" height="637px" style="margin: 10px;">
            </div>

            <div class="col-sm-6">
                <table>
                    <tr>
                        <th><img src="gambar/cake2.jpg" alt="" width="500px" style="margin: 10px;"></th>
                    </tr>

                    <tr>
                        <th><img src="gambar/cake3.jpg" alt="" width="500px" style="margin: 10px;"></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div style="margin-top: 50px; margin-bottom: 50px; padding-left: 20px; padding-right: 20px;">
        <span class="followig"> Follow Instagram </span><a href="https://www.instagram.com/littlemealbento/" class="ig">&#64;littlemealbento</a>

        <div class="row">
            <div class="col-sm-7">
                <table>
                    <tr>
                        <th><a href="https://www.instagram.com/littlemealbento/"><img src="gambar/bread3.jpg" alt="" width="250px" style="margin: 10px;"></a></th>
                        <th><a href="https://www.instagram.com/littlemealbento/"><img src="gambar/bread2.jpg" alt="" width="250px" style="margin: 10px;"></a></th>
                    </tr>

                    <tr>
                        <th><a href="https://www.instagram.com/littlemealbento/"><img src="gambar/bread1.jpg" alt="" width="250px" style="margin: 10px;"></a></th>
                        <th><a href="https://www.instagram.com/littlemealbento/"><img src="gambar/bread5.jpg" alt="" width="250px" style="margin: 10px;"></a></th>
                    </tr>
                </table>
            </div>

            <div class="col-sm-5">
                <div class="alignwa">
                    <a href="https://wa.me/c/6285292197466">
                        <img src="gambar/wa.png" alt="" style="width: 100px; color: rgb(117, 77, 48)">
                    </a>
                    <br>
                    <span class="fontkontenwa"> Hubungi dan Lihat Katalog Rara Bakery Melalui WhatsApp</span><br><a href="https://wa.me/c/6285292197466" class="wa">Rara Bakery Prambanan</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer --> <?php include("footer/footer.html") ?>
</body>

</html>