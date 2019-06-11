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


$(function () {
    setInterval(verificarNotificacao, 2000);// 2 segundos
    verificarNotificacao();

    $('.notificacoes').on('click', function () {

        $('.lista').toggle;


    })

    $('.addNotif').on('click',function () {
        $.ajax({
            url: 'add.php'
        })
    })

})