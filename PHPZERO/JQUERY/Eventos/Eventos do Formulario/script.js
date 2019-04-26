$(document).ready(function () {

    //evento de envio de formulário
    $('#form').bind('submit', function (e) {
        e.preventDefault();

        console.log('O formulário foi enviado');
    })

    //quando selecionar um texto no campo
    $('#nome').bind('select', function () {
        console.log('Algo foi selecionado')
    })

    //quando o campo receber o foco
    $('#nome, #email').bind('focus', function () {
        $(this).css('background-color', '#FF0000');
    })

   //quando o campo perder o foco
    $('#nome, #email').bind('blur', function () {
        $(this).css('background-color', '#FFF');
    })


    $('#idade').bind('change', function () {
        console.log($(this).val())
    })

})


