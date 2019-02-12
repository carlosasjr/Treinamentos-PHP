/*
parseInt = Converter string em inteiro
*/

function somar() {
    var campo1 = parseFloat(document.getElementById('campo1').value);
    var campo2 = parseFloat(document.getElementById('campo2').value);
    var soma = campo1 * campo2;

    document.getElementById('total').innerHTML = soma.toFixed(2);

}