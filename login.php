<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico">
    <title>Login - MBX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="bg-primary-dark">
    <div class="d-flex justify-content-center align-items-center" style="height:100vh;">
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="d-flex flex-row justify-content-center align-items-center mb-4">
                <img src="img/logo1.png" alt="logo" height="60px">
                <h3 class="font-weight-bold text-white m-0">MyBoX</h3>
            </div>
            <div class="card card-radius border-0 rounded-10px p-3">
                <div class="card-header border-0 bg-white">
                    <h5 class="text-center mt-2 mb-0 font-weight-bold">Login Member</h5>
                </div>
                <div class="card-body">
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
</body>
</html>