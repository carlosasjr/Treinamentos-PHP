/*
    onmousedown = quando aperta o botão
    onmouseup = quando solta
    onmouseover = passou com o mouse em cima
    onmouseout = mouse saiu de cima
    onmousemove = mouse se movimentando em cima
    onclick = mouse clicou
    ondblclick = duplo clique do mouse


    //adicionar css ao evento
    var obj = document.getElementById('id');
    obj.setAttribute('class', 'meuestilo');
 */

function apertouMouse() {
    console.log('apertou');
}

function soltouMouse() {
    console.log('soltou');
}

function mouseEmCima() {
    console.log('Passou por cima');
}

function mouseSaiuDeCima() {
    console.log('Saiu de cima');
}

function mouseMoveu() {
    console.log('Mouse em cima');
}

function clicou() {
    console.log('Clicou');
}

function cliqueDuplo() {
    console.log('Clicou duas vezes');
}