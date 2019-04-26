$(document).ready(function () {
  var valor =  $('#idade').val(); // pega o valor
   var texto =  $("#idade :selected").html(); // pega o texto

    //alterar um item da lista
    $('li').eq(2).html('25 Anos').css('color', 'green')

    $('#idade option').eq(2).html('alterou')

    $('li').eq(3).remove();
})