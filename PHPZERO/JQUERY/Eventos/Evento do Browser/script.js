$(document).ready(function () {

    $("div").bind('scroll', function () {
        $(this).css({
            "background-color": "blue",
            "font-size" : "20px",
            "width" : "300px"
        })
    })

    $(window).bind('resize', function () {
        console.log('mudou o tamanho da tela')
    })

})


