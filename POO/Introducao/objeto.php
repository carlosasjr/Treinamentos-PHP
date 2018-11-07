<?php

 include_once './class/Produto.class.php';
 
 $produto1 = new Produto;
 $produto2 = new Produto;
 
 $produto1->Codigo  = 4001;
 $produto1->Descricao = 'CD - The Best';
 
 $produto2->Codigo  = 4003;
 $produto2->Descricao = 'CD - Celine Dion'; 
 
 $produto1->ImprimeEtiqueta();
 $produto2->ImprimeEtiqueta();