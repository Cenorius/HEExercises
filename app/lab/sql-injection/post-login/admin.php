<?php
require("../../../lang/lang.php");
$strings = tr();

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<link rel="stylesheet" href="../../../public/assets/css/custom-theme.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 rounded-left gradient-custom ">
                        <div class="card-blok text-center text-white">
                            <img src="../../../public/assets/img/profile/bob.png" class="img-fluid">
                            <h2 class="font-weight-bold mt-4">Bob Dobalina</h2>
                            <p> Agente No-Infiltrado</p>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-right">
                        <h3 class="mt-3 text-center">Información</h3>
                        <hr class="badge-primary mt-0 w-25">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Email:</p>
                                <h6 class="text-muted">bobDobalina@iesmartinezm.es</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Phone:</p>
                                <h6 class="text-muted">+90 999 999 99 99</h6>
                            </div>
                        </div>
                        <h4 class="mt-3">Projectos</h4>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Reciente:</p>
                                <h6 class="text-muted">Inculpar a una panda</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Exito</p>
                                <h6 class="text-muted">FLAG{b13nv3N1DOs_parDi110s}</h6>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <ul class="list-unstyled d-flex justify-content-center mt-4">
                            <li><a href="#"><i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube px-3 h4 text-info"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter px-3 h4 text-info"></i></a></li>
                        </div>
                </div>
                <div class="logout mt-3 d-flex justify-content-center">
                <a href="index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
                

                </div>
            </div>

            

        </div>


    </div>
    <script id="VLBar" title="<?= $strings['title'] ?>" category-id="2" src="/public/assets/js/vlnav.min.js"></script>
    
    
</body>
</html>