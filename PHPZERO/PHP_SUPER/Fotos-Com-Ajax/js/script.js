$(function () {
    $('#formFoto').bind('submit', function (e) {
       e.preventDefault();

       var form = $('#formFoto')[0]; //pegou o formulário
       var dados = new FormData(form); // pegou todos os dados enviados, incluindo os arquivos


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
    })
})