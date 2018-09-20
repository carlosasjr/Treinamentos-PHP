<?php

//strtr  = Substituir texto do mesmo tamanho
//sintaxe = strtr(texto, de para);


$nome = 'Carlos 123';

echo $nome . '<br>';

echo strtr($nome, '123', 'Web');

echo '<br>';

$site = 'web 123 site 321';

$alteracoes = [
    '123' => 'Int',
    '321' => 'top'
];

echo strtr($site, $alteracoes);


var_dump('Carlos' == 0);
//O resultado será TRUE. Como a string não possui nenhum valor numérico no início, 
//a conversão dessa string para inteiro resulta em 0. Logo, 0 == 0 retorna TRUE.

var_dump('11Carlos' == 11);
//O resultado será TRUE, pois a string possui um início numérico 
//e foi truncada e convertida para inteiro int (11).

var_dump('11Carlos' === 11);
//Usando o operador === obteve-se um resultado falso. 
//Isso porque o operador === compara o valor e o tipo de dado. 


/*
  Além dos operadores de comparação, podem ser utilizadas as seguintes funções:
  strcmp() – Retorna 0 (zero) se as strings comparadas são iguais. É sensível à caixa, ou seja,
  diferencia letras maiúsculas e minúsculas.
  strcasecmp() – Idêntica à strcmp(), com a diferença de não ser sensível à caixa.
 */

// retorna false, pois Carlos é diferente de carlos 
// strcmp é case sensitive
if (strcmp('Carlos', 'carlos') == 0):
    echo 'True';
else:
    echo 'False';
endif;

echo '<hr>';

//retorna true, pois strcasecmp não é case sensitive
if (strcasecmp('Carlos', 'carlos') == 0):
    echo 'True';
else:
    echo 'False';
endif;

echo '<hr>';


/*
 * Há também a função strncasecmp(), que é uma variação da strcasecmp(). 
 * Porém, esta apenas compara uma quantidade X de caracteres das duas strings analisadas
 * 
 * Neste exemplo, é verificado apenas os primeiros 4 caracteres das duas strings.
 */

$nome = 'TreinaWeb Cursos';

// Passou
if( strncasecmp($nome, 'Trei', 4) === 0):
    echo 'Passou 1';
endif;



// Não passou
if( strncasecmp($nome, 'Tein', 4) === 0):
    echo 'Passou 2';
 endif;
 
 echo '<hr>';

$curso = "TreinaWeb";
$procurar = 'W';

//strpos busca a posição da string, também é case sensitive..
if (strpos($curso, $procurar) != false):
    echo "Encontrou";
else:
    echo "Não Encontrou";
endif;

echo '<hr>';

$procurar = 'w';
if (strpos($curso, $procurar) != false):
    echo "Encontrou";
else:
    echo "Não Encontrou";
endif;

echo '<hr>';

//para resolver, o ideial é usa o strtolower para colocar tudo em minusculo na pesquisa.
//No momento da busca ambas strings são convertidas em letra minúscula. 
//ou usar strtoupper que coloca tudo em maiusculo

if (strpos(strtolower($curso), strtolower($procurar)) !== false ):
    echo "Encontrou";
else:
    echo "Não Encontrou";    
endif;

echo '<hr>';


//inteiro para booleano retorna false
//string para booleano retorna true

var_dump((bool) 0);
var_dump((bool) 'Carlos');

//uma string vazia primeiro é convertida para inteiro 0 depois para false
var_dump((bool) '');

//strstr = retorna o texto apos encontra a ocorrência

$aluno = "Maria Eugenia";

echo strstr($aluno, 'E'); // retorna Eugenia

echo '<hr>';

echo strstr($aluno, 'E', true); // retorna Maria