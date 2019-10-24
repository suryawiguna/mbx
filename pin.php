<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico">
    <title>MBX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="bg-light-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <span class="font-weight-bold">MBX</span>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu mdi-24px text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item my-lg-0 my-2">
                        <a class="nav-link text-center text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item my-lg-0 my-2 active">
                        <a class="nav-link text-center text-white" href="pin.php">Buy PIN</a>
                    </li>
                    <li class="nav-item my-lg-0 my-2">
                        <a class="nav-link text-center text-white" href="login.php">Login Member</a>
                    </li>
                    <li class="nav-item my-lg-0 my-2 featured-link bg-warning">
                        <a class="nav-link text-center text-white" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content p-0">
        <div class="container">
            <div class="row pt-5 mt-5">
                <div class="col-12 text-center my-4">
                    <h2 class="font-weight-bold">Buy PIN</h2>
                </div>
            </div>
            <div class="row">
                <?php for($i = 0; $i < 11; $i++){
                    echo '<div class="col-lg-4">
                        <div class="card card-radius border-0 rounded-10px p-3 my-3">
                            <div class="card-header border-0 bg-white text-center">
                                <h3 class="mt-2 mb-0 font-weight-bold">50 PIN</h3>
                                <h5 class="m-0">Putu Made Komang</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-row">
                                            <span class="mdi mdi-email mdi-24px mr-2"></span>
                                            <p class="m-0 align-self-center">example@email.com</p>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="mdi mdi-whatsapp mdi-24px mr-2"></span>
                                            <p class="m-0 align-self-center">08123456789</p>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="mdi mdi-map-marker mdi-24px mr-2"></span>
                                            <p class="m-0 align-self-center">Jl. Raya No. 1, Denpasar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }?>
            </div>
        </div>
        <div class="section-div justify-content-center bg-primary text-white">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <h4 class="font-weight-bold text-center">Customer Service</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-row">
                            <span class="mdi mdi-map-marker mdi-24px mr-2"></span>
                            <p class="m-0 align-self-center">Jl. Tukad Baru Pulau Batanta No. 2B, Denpasar</p>
                        </div>
                        <div class="d-flex flex-row">
                            <span class="mdi mdi-email mdi-24px mr-2"></span>
                            <p class="m-0 align-self-center">cs@mbx.co.id</p>
                        </div>
                        <div class="d-flex flex-row">
                            <span class="mdi mdi-whatsapp mdi-24px mr-2"></span>
                            <p class="m-0 align-self-center">082 147 118 069</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright" class="d-flex text-white justify-content-center py-4" style="background-color: #006de3">
            <small class="m-0 text-center">Copyright © Mybox. All rights reserved PT. MITRA BISNIS EKSEKUTIF</small>
        </div>
    </div>
</body>
</html>