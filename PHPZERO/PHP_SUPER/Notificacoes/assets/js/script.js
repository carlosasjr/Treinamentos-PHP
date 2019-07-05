function verificarNotificacao() {
    $.ajax({
        url: 'verificar.php',
        type: 'post',
        dataType: 'json',
        success: function (json) {
            if (json.qt > 0) {
               $('.notificacoes').addClass('tem_notif');
               $('.notificacoes').html(json.qt);
            } else {
                $('.notificacoes').removeClass('tem_notif');
                $('.notificacoes').html('0');
            }
        }
    })
}

function listarNotificacao() {
    $.ajax({
        url: 'listar.php',
        type: 'post',
        success: function (html) {
            if (html != null) {
                $('#lista ul').html(html);
            }

        }
    })
}


$(function () {
    setInterval(verificarNotificacao, 5000);// 5 segundos
    verificarNotificacao();

    $('.notificacoes').on('click', function () {


        listarNotificacao();

        $('#lista').toggle();
    })

    $('.addNotif').on('click',function () {
        $('#lista').hide();

        $.ajax({
            url: 'add.php'
        })
    })

})