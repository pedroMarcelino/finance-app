//espera a pagina carregar por completo 
window.addEventListener('load', (event) => {

    //setTimeOut para retirar a tela de load, apos carregar toda a pag leva mais 1 seg para retirar o load.
    setTimeout(() => {
        //anima um fade para remover o load
        document.getElementById('img-load').classList.add('animate__fadeOut', 'animate__faster');
        //remove do html toda o row da ima load
        document.getElementById('row-img-load').remove()

        //exibe a row de register
        document.getElementById('form-register').removeAttribute('hidden')
        document.getElementById('form-register').classList.add('animate__fadeIn', 'animate__fast' )
            

    }, 1);

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()

});