<?php

//No algoritmo abaixo consideramos o CPF como (a b c d e f g h i ­ d1 d2)

//Função calcula o primeiro digito verificador
function calculaD1($cpf) {
	//A variável $somaD1 acumulará a soma de: 
	//(a * 1) + (b * 2) + (c * 3) + (d * 4) + (e * 5) + (f * 6) + (g * 7) + (h * 8) + (i * 9)
	$somaD1 = 0;

	//vamos usar a variável i como fator de multiplicação 
	//Também usamos a variável com i-1 para pegar a opção do CPF que precisamos multiplicar
	for($i=1; $i <= 9; $i++) {
		$somaD1 += $cpf[$i-1] * $i;
	}

	//Agora precisamos dividir a soma por 11 para descobrir o digito verificador 1
	$d1 = $somaD1 % 11;

	//Se o d1 for igual a 10 mudamos ele para 0
	if($d1 == 10)
		$d1 = 0;

	//Retornamos o d1 
	return $d1;
}

function calculaD2($cpf) {
	//A variável $somaD2 acumulará a soma de:
	//(a x 0) + (b x 1) + (c x 2) + (d x 3) + (e x 4) + (f x 5) + (g x 6) + (h x 7) + (i x 8) + (d1 x 9)
	$somaD2 = 0;

	//vamos usar a variável i como fator de multiplicação 
	//Também usamos a variável com i para pegar a opção do CPF que precisamos multiplicar
	//Agora como o loop começa em 0 não precisamos fazer i-1 para pegar o item do CPF
	for($i=0; $i < 9; $i++) {
		$somaD2 += $cpf[$i] * $i;
	}

	//Guardamos a soma da multiplicação de cada posição do CPF na variável somaD2
	//Agora precisamos somar o valor do digito verificador 1 (d1 * 9) 
	$somaD2 += calculaD1($cpf) * 9;

	//Pegamos o resto da divisão por 11
	$d2 = $somaD2 % 11; 	

	//Se d2 igual a 10, atribuímos o valor 0
	if($d2 == 10)
		$d2 = 0;

	//retorna d2
	return $d2;
}

//Função que verificará se os dígitos calculados conferem com o do CPF
function validaCPF($cpf){
	//Se D1 calculado for igual D1 do CPF e D2 calculado dor igual a D2 do CPF retornamos verdadeiro
	if(calculaD1($cpf) == $cpf[9] && calculaD2($cpf) == $cpf[10])
		return true;
	else
		return false;
}

//você pode gerar CPF para testar em http://www.geradorcpf.com
$cpf = '86369282731';	

if (validaCPF($cpf))
	echo 'CPF válido';
else
	echo 'CPF Inválido';
