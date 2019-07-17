<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 10/07/2019
 * Time: 19:52
 */

require 'classes.class.php';

$prd = new Produto();
$prd->getList();
$prd->setOutPut(new JsonOutPut());
//$prd->setOutPut(new ArrayOutPut());
print_r($prd->getOutPut());
