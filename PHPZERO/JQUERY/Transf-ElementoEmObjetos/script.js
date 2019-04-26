$(document).ready(function () {
    var titulo = $('h1');
    titulo.html('Titulo Novo');

    //enviar variavel do java script para o jQuery
    var div = document.getElementById('div');
    $(div).html('Novo texto')

    //selecionar um elmento da lista sem id
    alert( $('li:eq(1)').html() )

    //ou

    alert( $('li').eq(1).html() )

    var segundoitem = $('li').eq(1);

    segundoitem.html('Segundo item');


})