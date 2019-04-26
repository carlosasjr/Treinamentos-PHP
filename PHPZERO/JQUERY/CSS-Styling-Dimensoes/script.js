$(function () {
   //adiciona classe no elemento
    $('h1').addClass('fundovermelho');

    //remove classe do elemento
   // $('h1').removeClass('fundovermelho');

    //verificar se existe a classe no elemento
    //hasClass = retorna true ou false
    if ($('h1').hasClass('fundovermelho')) {
        alert('tem a classe')
    } else
        alert('não tem a classe')

    //CSS no elemento
    $('h1').css("color", "#0000FF");
    $('h1').css("font-size", "15px");

    //ou
    $('h1').css({"color" : "#0000FF",
                 "font-size" : "30px",
                 })

    $('button').css("border", "1px solid #000").css("background-color", "#FF0000").css("color", "#FFF")


    $('input').addClass('campotexto');

    //verifica se a classe existe e se o display é none ou block
    $('button').click(function () {
        var input = $('input')

        if (input.css('display')){
            if (input.css('display') == 'block') {
                input.css('display', 'none')
            } else {
                input.css('display', 'block')
            }
        } else {
            input.css('display', 'block')
        }
    })

})


