function Validar() {
    var num = document.getElementById('numero').value;

    if (num.length != 2) {
        alert('Número precisa ter dois digitos')
        return false;
    } else {
        return true;
    }
}