function editar(id) {
    $.ajax({
        url: 'editar.php',
        type: 'post',
        data: {id: id},

        beforeSend: function () {
            $('#modal').find('.modal-body').html('Carregando...');
            $('#modal').modal('show'); //exibir o formulário modal
        },

        success: function (html) {
            $('#modal').find('.modal-body').html(html);
            $('#modal').modal('show'); //exibir o formulário modal
            $('#modal').find('.modal-body').find('form').on('submit', salvar);
        }


    })
}

function salvar (e) {
    e.preventDefault();

    var id = $(this).find('input[name=id]').val();
    var nome = $(this).find('input[name=nome]').val();
    var email = $(this).find('input[name=email]').val();
    var senha = $(this).find('input[name=senha]').val();


    $.ajax({
        url: 'salvar.php',
        type: 'post',
        data: {id: id, nome: nome, email: email, senha: senha},

        success: function () {
            alert('Dados alterados com sucesso');
            $('#modal').modal('hide'); //fecha modal
            window.location.href = window.location.href;

        }
    })
}


function excluir(id) {
    $('#modal').find('.modal-body').html('Deseja excluir o id ' + id + ' ? <br> <button onclick="excluirUsuario(' + id + ')">Sim</button><button onclick="fechar()">Não</button> ');
    $('#modal').modal('show'); //exibir o formulário modal
}

function fechar() {
    $('#modal').modal('hide');
}

function excluirUsuario(id) {
    $.ajax({
        url: 'excluir.php',
        type: 'post',
        data: {id: id},

        success: function () {
            $('#modal').modal('hide'); //fecha modal
            window.location.href = window.location.href;

        }
    })
}