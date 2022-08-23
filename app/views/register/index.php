<?php

if (isset($_SESSION['validasiNama'])) {
    $validasiNama = $_SESSION['validasiNama'];
}

if (isset($_SESSION['validasiEmail'])) {
    $validasiEmail = $_SESSION['validasiEmail'];
}

if (isset($_SESSION['validasiPassword'])) {
    $validasiPassword = $_SESSION['validasiPassword'];
}

if (isset($_SESSION['validasiConfirm'])) {
    $validasiConfirm = $_SESSION['validasiConfirm'];
}

if (isset($_SESSION['validasiSamePassword'])) {
    $validasiSamePassword = $_SESSION['validasiSamePassword'];
}

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reservasi Hotel - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASEURL; ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .bg-register-image {
            padding:20px;
            background:url('<?= BASEURL ?>/images/logo.png');
            background-position:center;
            background-repeat: no-repeat;
            background-size: contain;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">BUAT AKUN!</h1>
                            </div>
                            <form class="user" action="<?= BASEURL ?>/register/store" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="name" id="exampleName" placeholder="Name">
                                        <small class="text-danger ml-3 <?= (empty($validasiNama)) ? "d-none" : "" ?> " ><?= $validasiNama ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address">
                                    <small class="text-danger ml-3 <?= (empty($validasiEmail)) ? "d-none" : "" ?> " ><?= $validasiEmail ?></small>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                                    <small class="text-danger ml-3 <?= (empty($validasiPassword)) ? "d-none" : "" ?> " ><?= $validasiPassword ?></small>
                                    <small class="text-danger ml-3 <?= (empty($validasiSamePassword)) ? "d-none" : "" ?> " ><?= $validasiSamePassword ?></small>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="confirm_password" id="exampleRepeatPassword" placeholder="Repeat Password">
                                    <small class="text-danger ml-3 <?= (empty($validasiConfirm)) ? "d-none" : "" ?> " ><?= $validasiConfirm ?></small>
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="Register" class="btn btn-primary btn-user btn-block">
                            </form>

                            <div class="text-center">
                                <a class="small" href="<?= BASEURL ?>/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASEURL; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASEURL; ?>/js/sb-admin-2.min.js"></script>

</body>

</html>