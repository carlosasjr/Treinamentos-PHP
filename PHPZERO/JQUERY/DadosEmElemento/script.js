$(document).ready(function () {
    //grava no html
    $('input').attr('data-idade', '90')

    //grava na memória
    $('input').data('idade', '90')


    //grava na memoria atraves do jquery
    //propriedade "data"

    var texto = $('input')
    texto.val('Carlos')
    texto.data('numchar', texto.val().length)

    console.log(texto.data('numchar'))
})