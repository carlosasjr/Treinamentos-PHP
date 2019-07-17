<?php
global $routers;
$routers = array();

$routers['/galeria/{id}/{titulo}'] = '/galeria/abrir/:id/:titulo';
$routers['/new/{id}'] = '/noticia/abrir/:id';
$routers['/n/{titulo}'] = '/noticia/abrirtitulo/:titulo';




