$(document).ready(function () {
    //seleciona os links com a classe galeria
    $('a.galeria').bind('click', function () {
        //grava o caminho da imagem
        var img = $(this).find('img').attr('src');

        $('.divbox img').attr('src', img);

        $('.bgbox, .divbox').fadeIn('fast');

        var w = $('.divbox').find('img').width();
        var h = $('.divbox').find('img').height();
        $('.divbox').css('width',w).css('height',h);
        $('.divbox').css('margin-left',(-w/2)-20).css('margin-top',(-h/2)-20);

    });


    $('.bgbox, .divbox button').bind('click', function () {
        $('.bgbox, .divbox').fadeOut('fast');


        $('.divbox').css('width','');
        $('.divbox').css('height',);
        $('.divbox').css('padding-bottom',40);
    });

})



