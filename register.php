<!DOCTYPE html>

<head>
    <title>Rara Bakery</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/background.css">
    <link rel="stylesheet" type="text/css" href="css/text-button.css">
    <link rel="stylesheet" type="text/css" href="css/marg.css">
</head>

<body>
    <div class="card d-flex flex-column float-right mt-5 margin2 mb-5" style="width: 375px;">
        <h2 class="user_pass text-center mt-5"> Register </h2>
        <div class="row mt-5 d-flex flex-column align-content-center mb-5">
            <form method="POST" action="proses-register.php">
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label user_pass">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label user_pass">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label user_pass">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class=" form-control" id="password" name="password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_tlp" class="col-sm-4 col-form-label user_pass">Phone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label user_pass">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="alamat" id="alamat" cols="20" rows="2"></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn button1" style="width: 234px;">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>