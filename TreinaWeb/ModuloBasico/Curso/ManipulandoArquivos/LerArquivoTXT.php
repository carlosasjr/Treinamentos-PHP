<?php

/*
  fopen(nome, modo) — Tenta abrir um arquivo.
  fwrite(arquivo, conteudo) – Escreve no arquivo.
  fread(arquivo, bytes) – Lê um arquivo por completo ou parte dele (dependendo do número de bytes que for informado).
  fclose(arquivo) - Fecha a “conexão” com o arquivo. É recomendado seu uso sempre após operar sobre o arquivo.
 */

/* A função fopen() aceita dois argumentos: Nome do arquivo e o segundo que for definido como modo que se quer 
 * operar. Os modos possíveis de operação são:

  “r” - Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
  “r+“- Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.
  “w” - Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do
 * arquivo para zero. Se o arquivo não existir, tenta criá-lo.
  “w+” - Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento
 * do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
  “a” - Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir,
 * tenta criá-lo.
  “a+” - Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir,
 * tenta criá-lo.
  “x” - Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir,
 *  a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, 
 * tenta criá-lo.
  “x+” - Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo.
 * Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.
 */


//nlbr2() converte as quebras de linha
//filesize() retorna o tamanho do arquivo em bytes

$nomearquivo = "cursos.txt";

$arquivo = fopen($nomearquivo, "r");

if ($arquivo):
    $conteudo = fread($arquivo, filesize($nomearquivo));
    echo nl2br($conteudo);
else:
    echo "Erro ao tentar abrir o arquivo";
endif;

fclose($arquivo);


echo "<hr>";

$fileRead = fopen("cursos.txt", 'r');

while (!feof($fileRead)):
    echo fgets($fileRead) . "<br>";
endwhile;

fclose($fileRead);




