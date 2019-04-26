//Para gravar uma informação na maquina cliente
localStorage.setItem("nome", "Carlos");

//Para buscar o valor gravado
var nome = localStorage.getItem("nome");

alert(nome);

//remover o valor
localStorage.removeItem("nome")


//também é possivel acessar diretamente
localStorage.nome = "carlos";
alert(localStorage.nome);


if (typeof localStorage.sobre == 'undefined'){
  localStorage.sobre =  prompt("Qual seu sobre nome");
}

document.getElementById("sobre").innerHTML = localStorage.sobre;

//a mesma regra para o sessionStorage