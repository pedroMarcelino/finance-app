<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finanças WebApp</title>
    <?php  include('../assets/includes/head-links.php')  ?>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto px-5" href="#">Finance App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-5" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link link-nav active" href="">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-nav" href="">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contatiner d-flex justify-content-center align-items-center shadown welcome-screen">
        <div class="row">
                <div class="col-md-6 text-center">
                    <img src="../assets/imgs/img-welcome.png" alt="Welcome" class="img-welcome">
                </div>
                <div class="col-md-6 text-center">
                    <h2>Bem-vindo ao</h2>
                    <h1>Finance App</h1>
                </div>
        </div>
    </div>

    <?php include('../assets/includes/js-links.php') ?>
</body>
</html>