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

    <!-- <div class="container d-flex justify-content-center align-items-center screan-register">
        <div  class="animate__animated" > 
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                    <div class="valid-feedback">Looks good!</div>
                </div>
            </form>
        </div>
    </div> -->

    <div class="container d-flex justify-content-center align-items-center screan-register animate__animated" id='form-register' hidden>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                <img src="../assets/imgs/register/register.png" alt="register" class="img-register">
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 col-sm-12">
                    <label for="first-name" class="form-label label-form">Nome</label>
                    <input type="text" class="form-control input w-100" id="first-name" >
                    <label for="surname" class="form-label label-form mt-2">Sobrenome</label>
                    <input type="text" class="form-control input w-100" id="surname">
                    <button class="btn btn-register w-100 w-sm-100 mt-4">Enviar </button>
                </div>
            </div>
        </div>
    </div>

    <?php include('../assets/includes/js-links.php') ?>
    <script src="./index.js"></script>
</body>
</html>