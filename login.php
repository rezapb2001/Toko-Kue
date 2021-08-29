<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "Login gagal! username dan password salah!";
    } else if ($_GET['pesan'] == "logout") {
        echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
    }
} ?>

<!DOCTYPE html>

<head>
    <title>Rara Bakery</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/background.css">
    <link rel="stylesheet" type="text/css" href="css/text-button.css">
    <link rel="stylesheet" type="text/css" href="css/marg.css">
</head>

<body>
    <div class="d-flex flex-column float-right mt-5 margin1">
        <h2 class="user_pass text-center mt-5"> Login </h2>
        <div class="row mt-5 d-flex flex-column align-content-center">
            <form method="POST" action="proses-login.php">
                <div class="form-group row ml-5">
                    <label for="username" class="col-sm-3 col-form-label user_pass">Username</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>

                <div class="form-group row ml-5">
                    <label for="password" class="col-sm-3 col-form-label user_pass">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class=" form-control" id="password" name="password">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <input href="index.php" class="btn button1" style="width: 250px;" type="submit" value="login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>