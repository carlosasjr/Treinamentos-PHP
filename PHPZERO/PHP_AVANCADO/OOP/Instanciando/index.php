<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 11/03/2019
 * Time: 17:35
 */

namespace OOP\Cachorro;

class Cachorro
{

     public function latir()
    {
        echo "Au au";
    }

   //método statico
    public static function dormir()
    {
        echo 'Dormindo!';
    }
}

// Instância a classe
$cachorro = new Cachorro();

//Chama o método latir
$cachorro->latir();


$dudu = new Cachorro();
$dudu->latir();

$bilu = new Cachorro();
$bilu->latir();


//Acessando métodos staticos
Cachorro::dormir();



?>
