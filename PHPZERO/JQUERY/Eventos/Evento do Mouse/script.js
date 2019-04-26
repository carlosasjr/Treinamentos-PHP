$(document).ready(function () {

    /*  //quando aperta o mouse
    $('.botao').bind('mousedown', function () {
        console.log('apertou o mouse')
    })

    //quando solta o mouse
    $('.botao').bind('mouseup', function () {
        console.log('soltou o mouse')
    })

    //mouse se moveu
    $('.botao').bind('mousemove', function () {
        console.log('mouveu o mouse')
    })
    */

   //mouse esta em cima
    $('.botao').bind('mouseover',function () {
        $(this).addClass('botao_emcima')
    })

    //mouse saiu de cima
    $('.botao').bind('mouseout',function () {
        $(this).removeClass('botao_emcima')
    })


    //duplo click
    $('.botao').bind('dblclick', function () {
        alert('duplo click')
    })

})


