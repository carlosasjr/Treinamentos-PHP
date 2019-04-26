$(document).ready(function () {
 
    $('#frmForm').bind('submit', function(e) {
        //evita o envio padrão do formulário
        e.preventDefault();

        var dados = $(this).serialize();

        //Primeiro parametro é um Json

        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: dados,

            //funcao para pegar o retorno
            success: function (result) {
                $('#retorno').html('Resultado: ' + result)
            },

            //caso de algum erro executa esta função
            error: function () {
                $('#retorno').html('Ocorreu um erro')
            }
        })


    })

})

