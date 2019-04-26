$(document).ready(function () {

    $('#btnEnviar').bind('click', function (e) {
        //previne a ação padrão do evento, ou seja,
        //não executa a ação padrão
        e.preventDefault();

        //verifica qual foi o evento que executou
        alert(e.type)

        //mostra o elemento que ocorreu a ação
        //semelhante ao this
        console.log(e.target)


        // var txt = $('#nome').val();
        var txt = $("input[name=nome]").val();
        alert(txt)


    })

})


