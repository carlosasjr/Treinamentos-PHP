<?php

require './Arquivo.class.php';

$arq = new Arquivo('MeuArquivo.doc', 'Loren input');

//s$arq->setConteudo('Conteudo do meu arquivo...');
//$arq->setNome('arquivo.docx');

$arq->salvar();

