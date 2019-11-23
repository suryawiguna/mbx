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
    <style>
        #rotate {
            animation: rotation 1s infinite linear;
        }
        
        @keyframes rotation {
            100%{ transform:rotatey(360deg); }
        }
    </style>
</head>
<body>
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
                    <li class="nav-item my-lg-0 my-2 active">
                        <a class="nav-link text-center text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item my-lg-0 my-2">
                        <a class="nav-link text-center text-white" href="pin.php">Buy PIN</a>
                    </li>
                    <li class="nav-item my-lg-0 my-2">
                        <a class="nav-link text-center text-white" href="#" data-toggle="modal" data-target="#login-modal">Login Member</a>
                    </li>
                    <li class="nav-item my-lg-0 my-2 featured-link bg-warning">
                        <a class="nav-link text-center text-white" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content p-0">
        <div class="jumbotron bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 order-2 my-5">
                        <h1 class="display-4 font-weight-bold mb-4">MBX is one stop solution for your needs</h1>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 mt-3">
                        <img src="img/undraw_best_place_r685.svg" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row section-div">
            <video width="100%" controls autoplay>
                <source src="vid/Mitra Bisnis Eksekutif.mp4" type="video/mp4">
            </video>
            </div>
            <div class="row section-div">
                <div class="col-lg-6">
                    <a href="#" class="pop">
                        <img src="img/new/1.jpg" class="d-block w-100">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="#" class="pop">
                        <img src="img/new/2.jpg" class="d-block w-100">
                    </a>
                </div>
            </div>
            <div class="row section-div">
                <div class="col-lg-6 offset-lg-3 my-4">
                    <img src="img/mbx.png" class="d-block w-100" id="rotate">
                </div>
            </div>
            <div class="row section-div">
                <div class="col-lg-5">
                    <a href="#" class="pop">
                        <img src="img/new/3.png" class="rounded" alt="" width="100%">
                    </a>
                </div>
                <div class="col-lg-7 px-auto px-lg-5 d-flex flex-column align-self-center">
                    <h1 class="display-5 mt-4 mt-lg-0 font-weight-bold">MBX Ecosystem</h1>
                    <p>MBX merupakan sosial media, yang dimana di dalam satu aplikasi sosial media tersebut tersedia market place yang di buat unik dan dapat memenuhi kebutuhan sehari-hari dari masyarakat</p>
                </div>
            </div>
            <div class="row section-div">
                <div class="col-lg-6">
                    <div class="card p-2 my-2 my-lg-0 border-0 rounded-lg bg-danger">
                        <div class="card-body text-white">
                            <h3 class="card-title font-weight-bold">Visi MBX</h3>
                            <p class="card-text">Menjadi kehidupan baru bagi penduduk dunia tahun 2025.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-2 my-2 my-lg-0 border-0 rounded-lg bg-warning">
                        <div class="card-body text-white">
                            <h3 class="card-title font-weight-bold">Misi MBX</h3>
                            <ol>
                                <li class="card-text">Membangun komunitas bisnis to bisnis dengan jaringan yang kuat mendunia dan menguntungkan</li>
                                <li class="card-text">Mengembangkan seluruh program-program dalam MBX sehingga menjadi aplikasi online yang paling dicari di dunia</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-div">
                <div class="col">
                    <a href="#" class="pop">
                        <img src="img/new/4.jpg" class="rounded" alt="" width="100%">
                    </a>
                </div>
            </div>
            <div class="row section-div justify-content-center">
                <div class="col-12">
                    <h1 class="text-center font-weight-bold mb-4">Features of MBX</h1>
                </div>
                <div class="col-lg-6">
                    <div class="card p-2 my-2 my-lg-0 rounded-lg bg-white">
                        <div class="card-body text-dark">
                            <h3 class="card-title font-weight-bold text-center mb-5">Online</h3>
                            <div class="row">
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/mbx_sosmed.jpg" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/mbx_mall.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/mbx_go.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/mytrip.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/intaromax.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/uvid.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/mbx_resto.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/melali.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-2 my-2 my-lg-0 rounded-lg bg-white">
                        <div class="card-body text-dark">
                            <h3 class="card-title font-weight-bold text-center mb-5">Offline</h3>
                            <div class="row">
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/xpoint.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/xpose.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/minimall_concept1.jpg" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/minimall_concept2.jpg" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/adventure.jpg" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/the_sandi_resort.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/in_beauty.png" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-6 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/be_happy.jpg" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                                <div class="col-12 p-2">
                                    <a href="#" class="pop">
                                        <img src="img/new/merchant_mbx.jpg" class="rounded" alt="" width="100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-div justify-content-center">
                <div class="col-lg-6">
                    <h5 class="text-center font-weight-bold mb-4">Sistem Pembayaran Menggunakan Uang Digital "INTARO"</h5>
                    <a href="#" class="pop">
                        <img src="img/new/intaro.png" class="rounded" alt="" width="100%">
                    </a>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-center font-weight-bold mb-4">Dompet digital yang dipakai untuk menyimpan saldo intaro, penukaran intaro ke rupah dan juga sebaliknya dinamakan “WinnerBank”</h5>
                    <div class="d-flex flex-row ">    
                        <a href="#" class="pop">
                            <img src="img/new/winner_bank.png" class="rounded" alt="" width="100%">
                        </a>
                        <a href="#" class="pop">
                            <img src="img/new/winner_bank2.jpg" class="rounded" alt="" width="100px">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row section-div justify-content-center">
                <div class="col-12">
                    <h1 class="text-center font-weight-bold mb-4">How To Register and Buy PIN?</h1>
                </div>
                <div class="col-lg-6 my-2 my-lg-0">
                    <a href="#" class="pop">
                        <img src="img/WhatsApp Image 2018-11-27 at 16.15.28.jpeg" alt="" width="100%">
                    </a>
                </div>
                <div class="col-lg-6 my-2 my-lg-0">
                    <a href="#" class="pop">
                        <img src="img/WhatsApp Image 2018-11-27 at 16.14.24.jpeg" alt="" width="100%">
                    </a>
                </div>
            </div>
            <div class="row section-div justify-content-center">
                <div class="col-12">
                    <h1 class="text-center font-weight-bold mb-4">Our Products and Services</h1>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#" class="pop">
                                <img src="img/my-box-social-media.jpeg" class="d-block w-100">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#" class="pop">
                                <img src="img/mbx-mall.jpeg" class="d-block w-100">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#" class="pop">
                                <img src="img/mbx-mall2.jpeg" class="d-block w-100">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#" class="pop">
                                <img src="img/promo-50-pin-get-10-pin.jpeg" class="d-block w-100">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#" class="pop">
                                <img src="img/mbx-mall3.jpeg" class="d-block w-100">
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">              
                    <div class="modal-body p-5">
                        <h5 class="text-center mt-2 mb-0 font-weight-bold mb-4 mt-0">Login Member</h5>
                        <form method="POST" action="" aria-label="">
                            <div id="form-div" class="d-flex flex-column p-0 mb-4">
                                <small>Email</small>
                                <input type="email" class="form-control bg-light" name="email" placeholder="email@example.com" required autofocus>
                            </div>
                            <div id="form-div" class="d-flex flex-column p-0 mb-4">
                                <small>Password</small>
                                <input type="password" class="form-control bg-light" name="password" placeholder="............." required>
                            </div>
                            <button type="submit" id="btn-login" class="btn btn-block btn-lg bg-primary text-white font-weight-bold m-0"><i class="mdi mdi-login-variant mr-1"></i>Login</button>
                        </form>
                        <a href="register.php" class="btn btn-sm btn-block btn-outline-warning font-weight-bold mt-2">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">              
                    <div class="modal-body p-0">
                        <img src="" class="imagepreview" style="width: 100%;" >
                    </div>
                </div>
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
    <script>
        $(function() {
            $('.pop').on('click', function() {
                event.preventDefault();
                $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                $('#imagemodal').modal('show');   
            });
        });
    </script>
</body>
</html>