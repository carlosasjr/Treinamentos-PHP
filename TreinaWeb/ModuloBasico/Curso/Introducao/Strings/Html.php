<?php

$textoHTML = "<h1>Meu nome é Carlos </h1>";
echo $textoHTML . '<br>';

// htmlentities = não interpreta codigo html, isso é bom para tratar os campos que retornam para o banco.
echo htmlentities($textoHTML);

