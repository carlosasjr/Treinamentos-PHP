$(document).ready(function () {
  var valor =  $("#algo").html();

  //remove todos os espaços
  $.trim(valor);

  //ou
    var valor =  $.trim($("#algo").html());


  //pesquisa em loop
  $('li').each(function () {
      alert($(this).html())
  })


    //verifica o tipo da variavel
    var idade = 90;
    $.type(idade)


    //verificar se valor é numerico
    $.isNumeric(idade)

    if ($.isNumeric(idade)) {
        //é numerico
    }

    /*
    $.isArray();
    $.isInteger();
    $.isFunction();
    */


    //verifica se existe elemento na tela
    if ($('#algo').length > 0) {
        alert('existe')
    } else {
        alert('não existe')
    }

   //verifica se o elemento possui uma classe
    if ($('ul').hasClass('lista')) {
        alert('tem a classe')
    } else {
        alert('não tem a classe')
    }


    //desativar um elemento
    $('#nome').attr('disabled','disabled');

    //ativar um elemento
    $('#nome').removeAttr('disabled');


    $('#salvo').attr('disabled', 'disabled');

   //marcar um checkbox
    $('#salvo').attr('checked','checked');

    //remover um check do checkbox
    $('#salvo').removeAttr('checked');

})