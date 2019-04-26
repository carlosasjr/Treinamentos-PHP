$(document).ready(function () {
 
    $('#btnAcao').bind('click', function () {

        //carrega um arquivo externo para dentro da pagina
        //$('.div').load("teste.html")

        //requisita o arquivo e executa a função e manda o resultado para o parâmetro da função
      /*  $.get("teste.html", function (result) {
            $('.div').html(result);
        })*/


        $.post("teste.html", function (result) {
            $('.div').html(result);
        })

    })

})

