$(function () {
    $('#btnEnviar').bind('click', function () {
        var dados = new FormData();

        var arquivos = $('#foto')[0].files;

        if (arquivos.length > 0) {
            dados.append('nome', $('#nome').val());
            dados.append('foto', arquivos[0]);

            $.ajax({
                type: 'POST',
                url: 'recebedor.php',
                data: dados,

                contentType: false,
                processData: false,
                success: function (msg) {
                    alert(msg);
                }
            })

        }
    })
})