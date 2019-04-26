$(document).ready(function () {
 
    $('#frmForm').bind('submit', function(e) {
        //evita o envio padrão do formulário
        e.preventDefault();

        var dados = $(this).serialize();
        console.log(dados);


        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            dataType: 'json',
            data: dados,

            //funcao para pegar o retorno
            success: function (result) {
                if (result.erro == false) {
                    $('#msgAjax').html('Email: ' + result.dados.email + ' Logado com sucesso')
                } else
                if (result.erro == true) {
                    $('#msgAjax').html('Email: ' + result.dados.email + ' inválido')
                }

            },

            //caso de algum erro executa esta função
            error: function () {
                $('#msgAjax').html('Ocorreu um erro')
            }
        })


    })

})

