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
    <?php include('../assets/includes/navbar.php')?>

    <div class="container d-flex justify-content-center align-items-center shadown welcome-screen">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img src="../assets/imgs/welcome/img-welcome.png" alt="Welcome" class=" img-welcome">
            </div>
            <div class="col-md-6 col-sm-12 text-center p-5">
                <h2>Bem-vindo ao</h2>
                <h1 class="h1-principal">Finance App</h1>
                <p>O Finance App é o lugar onde você poderá organizar todas as suas 
                    finanças em um lugara só!</p>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <a href="../register/index.php"><button class="btn btn-register w-100 w-sm-50">Register </button></a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="../login/index.php"><button class="btn btn-login w-100 w-sm-50">Login</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('../assets/includes/js-links.php') ?>
</body>
</html>