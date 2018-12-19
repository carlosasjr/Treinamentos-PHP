<?php

require '../../../../../public/index.php';

use App\widgets\TElement;

//inicia o documento html
$html = new TElement('html');

//instancia secao head
$head = new TElement('head');
$html->add($head); //adiciona ao html

//define o título da pagina
$title = new TElement('title');
$title->add('Título da pagina html');
$head->add($title); //adiciona ao head

//inicia o body do html
$body = new TElement('body');
$body->bgcolor = '#ffffdd';
$html->add($body); //adiciona ao html

$center = new TElement('center');
$body->add($center);

//instancia um parágrafo

$p = new TElement('p');
$p->align = 'center';
$p->add('Sport Club Internacional');
$center->add($p); //adiciona ao body

//instancia uma imagem
$img = new TElement('img');
$img->src = 'logo-pequeno.png';
$img->width = '120';
$img->heigth = '120';
$center->add($img);


//instancia um separador horizontal
$hr = new TElement('hr');
$hr->width = '150';
$hr->align = 'center';
$center->add($hr); //adiciona ao body

 //instancia um link
 $a = new TElement('a');
 $a->href = 'http://www.internacional.com.br';
 $a->add('Visite o Site Oficial');
 $center->add($a);

 //instancia uma quebra de linha
$br = new TElement('br');
$center->add($br);

//instancia um botão
$input = new TElement('input');
$input->type = 'button';
$input->value  = 'Clique aqui para saber...';
$input->onclick = "alert('Clube do povo do rio grande do sul!')";
$center->add($input);

//exibe o html com todos os elementos filhos
$html->show();



