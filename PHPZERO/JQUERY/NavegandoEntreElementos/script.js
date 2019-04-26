//seleciona o objeto pai
$('.filha').parent() // div
$('.filha').parent().parent() //topo


//pegar a primeira div dentro do body
$('body').find('div').eq('1')


//ir até um elemento pai sem saber quantos parents
$('.irmao').closest('.topo')


//ir de um elemento para um elemento fora do contexto a frente
//vai para o elemento mestre e depois procura
$('.irmao').closest('.site').find('.conteudo')
