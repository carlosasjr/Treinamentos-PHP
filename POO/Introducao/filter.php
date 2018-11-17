<?php

include_once './APP.ADO/TExpression.class.php';
include_once './APP.ADO/TFilter.class.php';

//cria um filtro por data (string)
$filter1 = new TFilter('data', '=', '2007-06-02');
echo $filter1->dump();

echo "<br>\n";

//cria um filtro por salário (integer)
$filter2 = new TFilter('salario', '>', 3000);
echo $filter2->dump();

echo "<br>\n";

//cria um filtro por sexo (array)
$filter3 = new TFilter('sexo', 'IN', ['M', 'F']);
echo $filter3->dump();

echo "<br>\n";

//CRIA UM FILTRO POR CONTRATO (NULL)
$filter4 = new TFilter('contrato', 'IS NOT', NULL);
echo $filter4->dump();

echo "<br>\n";

//cria um filtro por ativo (boolean)
$filter5 = new TFilter('ativo', '=', TRUE);
echo $filter5->dump();

echo "<br>\n";






