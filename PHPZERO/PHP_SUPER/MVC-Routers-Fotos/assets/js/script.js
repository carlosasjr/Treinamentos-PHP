$(function () {
    $('#form-imagem').on('submit', function (e) {
        e.preventDefault();

        var form = $('#form-imagem')[0]; //pegou o formulário
        var dados = new FormData(form);


        $.ajax({
            url: BASE_URL + 'home/store',
            type: 'post',
            dataType: 'json',
            data: dados,
            contentType: false,
            processData: false,
            success: function (json) {
                var html = '<img src="' + BASE_URL + 'assets/images/galeria/' + json.url + '" width="300" border="0"><br/>' + json.titulo + '<hr>';
                $('#fotos').prepend(html);
            }
        })
    })
})