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
    
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    console.log($("#password").val(), $("#confirmation-password").val() );
                    var password = document.getElementById('password');
                    var confirmPassword = document.getElementById('confirmation-password');

                    // Verificar se as senhas coincidem
                    if (password.value !== confirmPassword.value) {
                        confirmPassword.setCustomValidity('Passwords do not match');
                        confirmPassword.classList.add('is-invalid');
                        $('#confirmPasswordIcon').addClass('invalid-feedback-icon').html('<i class="bi bi-x-circle"></i>');
                    } else {
                        confirmPassword.setCustomValidity('');
                        confirmPassword.classList.remove('is-invalid');
                        confirmPassword.classList.add('is-valid');
                        $('#confirmPasswordIcon').removeClass('invalid-feedback-icon').html('<i class="bi bi-check-circle"></i>');

                        console.log('certo');

                        
                    }

                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false)
            })
    })()
});