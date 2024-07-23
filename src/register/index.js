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
        var forms = document.querySelectorAll('.validation-name')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        console.log('error');
                        event.preventDefault();
                        event.stopPropagation()
                    }else{
                        event.preventDefault();
                        console.log('Correto');
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()

    $('.btn-password').on('click', (event)=>{
        event.preventDefault();
        var forms = document.querySelectorAll('.validation-password')

        const senha = $('#password').val();
        const confSenha = $('#conf-password').val();

        console.log(senha, confSenha);

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('click', function (event) {
                    if(senha == confSenha){
                        event.preventDefault();
                        console.log('Correto');
                    }else{
                        $('#conf-password').val('')
                        if (!form.checkValidity()) {
                            console.log('error');
                            event.preventDefault();
                            event.stopPropagation()
                        }
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })

});