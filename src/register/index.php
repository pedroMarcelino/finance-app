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

    <div class="container d-flex justify-content-center align-items-center screan-register" id='row-img-load'>
        <div class="row">
            <div class="col-md-12">
                <img id="img-load" class="animate__animated" src="../assets/imgs/svgs/bouncing-circles.svg" alt="" style="width:75%;">
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center screan-register animate__animated" id='form-register' hidden>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                <img src="../assets/imgs/register/register.png" alt="register" class="img-register">
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center"  >
                <form class="validation-name" novalidate>
                    <div id="block-name" class="row animate__animated">
                        <div class="mb-3 col-md-12 col-sm-12">
                            <label for="name" class="form-label label-form">Nome</label>
                            <input type="text" class="form-control input" id="name" required>
                            <div class="valid-feedback">Parece bom!</div>
                            <div class="invalid-feedback">Por favor, forneça um nome válido.</div>
                        </div>
                        <div class="mb-3 col-md-12 col-sm-12">
                            <label for="surname" class="form-label label-form">Sobrenome</label>
                            <input type="text" class="form-control input" id="surname" required>
                            <div class="valid-feedback">Parece bom!</div>
                            <div class="invalid-feedback">Por favor, forneça um sobrenome válido.</div>
                        </div>
                        <div class="mb-3 col-md-12 col-sm-12">
                            <label for="email" class="form-label label-form">E-mail</label>
                            <input type="email" class="form-control input" id="email" required>
                            <div class="valid-feedback">Parece bom!</div>
                            <div class="invalid-feedback">Por favor, forneça um e-mail válido.</div>
                        </div>
                        <button class="btn btn-register w-100 btn-name">Próximo</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center"  >
                <form class="validation-password" novalidate>
                    <div  class="mb-3 col-md-12 col-sm-12" >
                        <label for="password" class="form-label label-form">Senha</label>
                        <input type="password" class="form-control input" id="password" required>
                        <div class="valid-feedback">Parece bom!</div>
                        <div class="invalid-feedback">As senhas não são iguais!</div>
                    </div>
                    <div class="mb-3 col-md-12 col-sm-12">
                        <label for="conf-password" class="form-label label-form">Confirmar senha</label>
                        <input type="password" class="form-control input" id="conf-password" required>
                        <div class="valid-feedback">Parece bom!</div>
                        <div class="invalid-feedback">As senhas não são iguais!</div>
                    </div>
                    <button class="btn btn-register w-100 btn-password">Próximo</button>
                </form>
            </div>
            
        </div>
    </div>

    <?php include('../assets/includes/js-links.php') ?>
    <script src="./index.js"></script>
</body>
</html>