$(function () {
    $('#formLogin').bind('submit', function (e) {
        e.preventDefault();


        var dados = $(this).serialize();

        $.ajax({
            type: 'post',
            url: 'login.php',
            data: dados,
            success: function (msg) {
                window.location.href = 'http://www.globo.com';
            }
        })


    })
})