$(document).ready(function () {

    $('#btn').bind('click', function () {
        //todos podem ter os parametros
        //slow e fast


        //desaparecer
        //$('#div').hide()

        //aparecer
        // $('#div').show();

        //desaparecer novo
        //$('#div').fadeOut();

        //aparecer novo
        //$('#div').fadeIn();


        //desaparecer de baixo pra cima
        //$('#div').slideUp();

        //aparecer de cima pra baixo
        // $('#div').slideDown();

        //faz as duas coisas...
        //$('#div').toggle('slow');

        //faz as duas coisas com o fade
      // $('#div').fadeToggle();

        //faz as duas coisas com o slide
         $('#div').slideToggle();
    })


})

/*Incluindo o jQuery UI no projeto, você pode usar:

    $("div").click(function () {
        $(this).show("slide", { direction: "left" }, 1000);
    });

    */

