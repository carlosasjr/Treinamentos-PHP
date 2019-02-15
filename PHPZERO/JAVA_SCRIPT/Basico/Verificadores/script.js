var nome = prompt("Qual é o seu nome?");

if (nome == "Carlos") {
    alert('Esse é o seu nome');
} else {
    alert('Este não é seu nome');
}

function testeVerificador() {
    var x = parseInt(document.getElementById('numero').value);

    if (x > 10) {
        alert("É maior que 10")
    } else {
        alert("não é maior que 10");
    }
}
