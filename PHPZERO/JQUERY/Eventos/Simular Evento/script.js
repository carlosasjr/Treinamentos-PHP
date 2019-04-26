$(document).ready(function () {

    $('#btn1').on('click', function () {
        alert('clicou no botão 1')
        $('#btn2').trigger('click')
    })

    $('#btn2').on('click', function () {
        alert('clicou no botão 2')
    })

   //Selecionar todos os checkbox


    var checkTodos = $("#checkTodos");
    checkTodos.on('click', function () {
        if ($(this).is(':checked')) {
            $('input:checkbox').prop("checked", true)

        } else {
            $('input:checkbox').prop("checked", false)
        }
    })

})


