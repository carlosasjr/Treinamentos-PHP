$(document).ready(function () {
    $('#frmIMC').bind('submit', function (e) {
        e.preventDefault();


        var peso = $('#peso').val();
        var altura = $('#altura').val();


        altura = altura.replace(',', ".");
        peso = peso.replace(',', ".");

        var imc = peso / Math.pow(altura, 2);

        if(imc < 16){
            var traducao = "Baixo peso, muito grave";
        } else if(imc >= 16 && imc < 16.99){
            var traducao = "Baixo peso, grave";
        }else if(imc >= 17 && imc < 18.49){
            var traducao = "Baixo peso";
        }else if(imc >= 18.50 && imc < 24.99){
            var traducao = "Baixo nomal";
        }else if(imc >= 25 && imc < 29.99){
            var traducao = "Sobrepeso";
        }else if(imc >= 30 && imc < 34.99){
            var traducao = "Obesidade I";
        }else if(imc >= 35 && imc < 39.99){
            var traducao = "Obesidade II";
        }else if(imc >= 40){
            var traducao = "Obesidade III";
        }

        $('#resultado').html("Seu IMC: "+imc.toFixed(2)+" kg/m2 e seu status é: " + traducao);




    })
})


