function trocarTextoDiv() {
    var area = document.getElementById('area');
    var texto = prompt('Qual é o seu nome');

    area.innerHTML = texto;
}

function trocarDivParametro(nome) {
    var area = document.getElementById('area');
    var texto = prompt('Qual é o seu sobrenome');

    area.innerHTML = nome + " " + texto;
}