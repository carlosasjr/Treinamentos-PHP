$(document).ready(function () {
    // seleciona todos os button da tela
    //$("button")

    //selecionar o elemento pelo id
    // $("#botao1")


    //selecionar elemento pela classe
    //$(".botao")

    //selecionar determinando elemento que possuir a classe
    // elemento li com a classe botao
    //$("li.botao")

    //entra no elemento que tem a classe lista2  e seleciona o
    // elemento li com a classe botao
    //$(".lista2 li.botao")


    //verifica se existe um elemento na tela com determinada classe
    if ($(".botao").length > 0 ) {
        //existe a classe botao
        alert("Existe botão na tela")
    }


    //colocar elemento em uma variavel
    var elemento = $(".lista2 li.botao");
    elemento.html('teste');
    alert(elemento.html());




})