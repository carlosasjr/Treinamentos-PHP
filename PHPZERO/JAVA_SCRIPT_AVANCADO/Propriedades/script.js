/*
 * Criando objetos em java script
 */



function Animal() {
  this.raca = "Cao";
  this.nome = "Lulu";
  this.idade = 4;
  this.peso = 10;

  this.fazerXixi = function () {
      document.write(this.nome + " xiiiiiii" + '<br>');
  }

  this.comer = function (kg) {
      document.write("hummm" + '<br>');
      this.peso += (kg/2);
      document.write(this.nome + " Seu novo peso é: " + this.peso + "<br>");
  }
}

var dog = new Animal();
dog.raca = "Vira Lata"
dog.nome = 'Rex'
document.write(dog.raca + '<br>');
document.write(dog.nome + '<br>');

document.write('<br>');

var xuxu = new Animal();
xuxu.raca = "Gato";
xuxu.nome = 'miau'
document.write(xuxu.raca + '<br>')
document.write(xuxu.nome + '<br>')



