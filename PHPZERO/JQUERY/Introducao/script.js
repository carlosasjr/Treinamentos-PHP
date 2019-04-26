// $(elemento).acao // acao no elemento selecionado

// $.acao //acao do jquery
// Jquery.acao // acao do jquery

//Java Script
//executar algo quando a pagina for totalmente carregada
/*
window.onload = function() {

}
*/

//JQuery
//executar algo quando a pagina for totalmente carregada
$(document).ready( function () {
    $("#texto").html('escrever na tela pelo id do elemento');
    $(".todos").html('Escrevendo na div pela classe');
})

// ou

/*

$(function () {
    alert("Carregou")
})

 */


//Para evitar conflitos com outras bibliotecas
var $j = JQuery.noConflict();
$j(document).read(function () {

})

//ou acessar diretamente
JQuery(document).ready(function () {

})


