/*
event = passa o parâmetro evento para saber qual tecla foi usada
onkeydown = quanto aperta a tecla
onkeyup = quanto solta a tecla

 event.keyCode = Numero da tecla apertada
 event.shiftKey = verifica se a tecla shift esta pressionada
 event.ctrlKey
 event.altKey
 */

function apertouTecla(event) {
    console.log("Apertou a tecla: " + event.keyCode);

    if (event.keyCode == 13){
        console.log('Apertou Enter');
    }

    if (event.shiftKey == true || event.keyCode == '69'){
        console.log('Apertou uma tecla com shift + E');
    }
}