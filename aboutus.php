<!DOCTYPE html>

<head>
    <title>Rara Bakery</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script type="text/javascript" src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/allstyle.css">
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
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

    <div style="margin: 20px; padding-left: 15px; padding-right: 15px;">
        <div class="row">
            <div class="col-sm-7">
                <h3> History </h3>
                <div class="pkonten">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Totam rem possimus quo a. Iure consequatur doloremque culpa odio corporis animi nesciunt sapiente,<br>
                        quasi reiciendis, excepturi, velit qui maxime. Fugiat, suscipit.</p>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Quis error maiores est repellat dignissimos ut tempore debitis facilis animi,<br>
                        iste ratione quas magni necessitatibus aut quo in alias esse blanditiis.</p>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                        Officiis harum similique et veniam nobis quibusdam ipsum atque quia,<br>
                        porro nam a eligendi quod nihil, odio ad impedit reiciendis. Sunt, nisi!</p>
                </div>
            </div>

            <div class="col-sm-5">
                <img src="gambar/sidpc.jpg" alt="" width="350px">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <img src="gambar/sidpc2.jpg" alt="" width="350px">
            </div>

            <div class="col-sm-7">
                <h3> Tentang Rara </h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Totam rem possimus quo a. Iure consequatur doloremque culpa odio corporis animi nesciunt sapiente,<br>
                    quasi reiciendis, excepturi, velit qui maxime. Fugiat, suscipit.</p>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Quis error maiores est repellat dignissimos ut tempore debitis facilis animi,<br>
                    iste ratione quas magni necessitatibus aut quo in alias esse blanditiis.</p>

                <br>
                <h3> Visi dan Misi </h3>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                    Officiis harum similique et veniam nobis quibusdam ipsum atque quia,<br>
                    porro nam a eligendi quod nihil, odio ad impedit reiciendis. Sunt, nisi!</p>
            </div>
        </div>
    </div>

    <!-- Footer --> <?php include("footer/footer.html") ?>
</body>

</html>