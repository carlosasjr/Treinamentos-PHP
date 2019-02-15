var lista = ["arraoz", "feijão", "Macarrão", "Carne"];


//buscando um valor
//retorna a posição 1
alert( lista.indexOf("feijão"));

//gerando string
alert(lista.join(', '));

//remover ultimo elemento
//retorna o item removido
lista.pop()

//remover o primeiro elemento
//retorna o item removido
lista.shift();

//adicionar item
lista.push("teste");

alert(lista);

//testar se existe valor no array

if (lista.indexOf("feijão") > -1) {
    alert("Tem na lista");
} else {
    alert("Não tem na lista");
}

