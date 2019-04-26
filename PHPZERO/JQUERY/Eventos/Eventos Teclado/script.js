$(document).ready(function () {

    //apertar uma tecla
  /*  $('#nome').bind('keydown', function () {
        console.log('Apertou tecla')
    })*/

    //solta uma tecla
    $('#nome').bind('keyup', function (e) {
        //saber qual tecla foi apertada

        if (e.keyCode == 13) {
            console.log('Apertou enter')
            var txt = $(this).val()
            console.log(txt)
            $(this).val('');
        }

    })
})


