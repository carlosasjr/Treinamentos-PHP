$(document).ready(function () {
    //mudando a largura pelo atributo
    $("#teste").find('img').attr('width', '100');
    $("#teste").find('img').attr('height', '100');

    //mudando a largura e altura diretamente via css
    $('#teste').find('img').width(300);
    $('#teste').find('img').height(200);


    //inserir valor no input -
    //usa val pq o input não tem tag fechando
    $('input').attr('value', 'Teste');

    //diretamente
    $('input').val('Teste')

    //inserir um elemento depois ou antes de outro
    //primeiro seleciona o elemento
    //depois usa o after para depois e before para antes.
    //fora do elemento selecionado
    $('#nome').before('<div>texto antes do input</div>');
    $('#nome').after('<div>texto depois do input</div>');



    //adicionar elemento dentro do elemento selecionado
    //antes e depois - dentro do elemento
    $("ul").prepend('<li>Item 0</li>')
    $("ul").append('<li>Item 5</li>'); //adiciona depois


    //remover elemento
    $("ul").remove();




})
