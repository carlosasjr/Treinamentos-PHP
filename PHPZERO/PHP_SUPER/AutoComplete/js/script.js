$(function () {

    $('#busca').bind('keyup', function () {
        var texto = $(this).val();


        $.ajax({
            url: 'busca.php',
            type: 'post',
            dataType: 'json',
            data: {texto: texto},
            success: function (json) {
                var html = '';

                   if (json.length > 0) {
                       html = '<thead>\n' +
                           '        <tr>\n' +
                           '          <th>Código</th>\n' +
                           '          <th>Descricao</th>\n' +
                           '        </tr>\n' +
                           '    </thead>\n' +
                           '<tbody>\n';

                       for (var i in json) {
                           html += '<tr class="seleciona" data-id="' + json[i].id + '"' + ' data-nome="' + json[i].descricao + '">' +
                               '<td>' + json[i].id + '</td>' +
                               '<td>' + json[i].descricao + '</td>' +
                               '</tr>';
                       }

                       html += '</tbody>\n';
                   }

                    $('#resultado').html(html);



                $('.seleciona').on('click', function () {
                    $('#id').val($(this).attr('data-id'));
                    $('#busca').val($(this).attr('data-nome') );

                    $('#resultado').html('');
                    $('#id').focus();
                });
            }
        })

    })

})