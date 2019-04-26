$(document).ready(function () {
    //selecionando um elemento e trocando o texto
   // $('#teste').html('Texto trocado');

    //exibe o valor de um elemento
    //alert($("#teste").html())

    //adicionar classe
    $("#teste").find('button').addClass('btn btn-primary');

    //ou

    $("#botao2").addClass('btn btn-dark');
    $("#botao2").html('Botão 2');



    $('#buscaCliente').click(function () {
        var selecao = $("#selecao :selected").html();

        var valor = $("#selecao :selected").val();


        $('#id').val(valor);
        $('#campo').val(selecao);
    })

})


