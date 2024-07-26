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

    <div class="container cont-register d-flex justify-content-center align-items-center screan-register" id='row-img-load'>
        <div class="row">
            <div class="col-md-12">
                <img id="img-load" class="animate__animated" src="../assets/imgs/svgs/bouncing-circles.svg" alt="" style="width:75%;">
            </div>
        </div>
    </div>

    <div class="container cont-register" id="form-register" hidden>
        <div class="row w-100">
            <form class="needs-validation w-100" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" required>
                        <div class="invalid-feedback">Preencha esse campo!</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="surname">Sobrenome</label>
                        <input type="text" class="form-control" id="surname" required>
                        <div class="invalid-feedback">Preencha esse campo!!</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Preencha com e-mail corretamente!</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">
                            Ops! Algo parece estar errado!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="confirmation-password">Confirme sua senha</label>
                        <input type="password" class="form-control" id="confirmation-password"  required>
                        <div class="invalid-feedback">
                            Ops! Algo parece estar errado!
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-end">
                    <button class="btn btn-register p-2" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include('../assets/includes/js-links.php') ?>
    <script src="./index.js"></script>
</body>
</html>