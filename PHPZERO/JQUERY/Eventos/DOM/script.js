$(document).ready(function () {
    
    //evento click no botão
    $('button').click(function () {

        /* if ($(this).hasClass('btn btn-primary')) {
            $(this).removeClass('btn btn-primary')
        } else
        $(this).addClass('btn btn-primary')
        */

        //ou

        $(this).toggleClass('btn btn-primary')

    })

    $('button').mouseover(function () {
        $(this).addClass('btn btn-primary')
    })

    $('button').mouseout(function () {
        $(this).removeClass('btn btn-primary')
    })
    
})


