/*
 * AÇÃO
 * TEMPO
 */

function acao() {
  document.write("Executou....<br>");
}


/* tempo em milesecundos
* setInterval executa a ação a cada tempo
* setTimeout executa a ação apenas uma vez depois do tempo previsto
* */
/*setInterval(acao, 2000);*/

/*setTimeout(acao, 2000);*/


/*
Para ter controle sobre o setInterval é preciso colocar dentro de uma variável
Desta forma eu posso parar a execução da acao se desejar, usando o
clearInterval(variavel) ou
clearTimeout(variavel)

 */
var timer =  setInterval(acao, 2000);