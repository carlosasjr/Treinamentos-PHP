<?php
require dirname(__DIR__) . '/vendor/autoload.php';


use App\controler\MyControler;

$controller = new  MyControler();

try {
    $html = $controller->view();
    echo $html;
} catch (Throwable $error) {
    echo "Error: " . $error->getMessage();
}
