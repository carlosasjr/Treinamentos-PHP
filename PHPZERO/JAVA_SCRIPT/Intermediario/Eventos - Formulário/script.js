/*
onchange = quando mudar a opção - passar como parâmetro o proprio objeto = this
onfocus = quando recebe o foco
onsubmit = ao enviar o formulário
 */

function mudouOpcao(objeto) {
    console.log(objeto.value);
}

function focou() {
    console.log('focou no campo');
}

function saiuDoCampo() {
    console.log('Saiu do campo');
}