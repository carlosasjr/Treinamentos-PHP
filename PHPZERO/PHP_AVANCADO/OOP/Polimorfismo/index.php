<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 14/03/2019
 * Time: 17:06
 */

class Animal {
    public function getNome() {
        echo "getNome da Classe Animal";
    }
}

class Cachorro extends Animal {
    public function getNome() {
        parent::getNome();
        echo "getNome da Classe Cachorro";
    }
}

$dog = new Cachorro();
$dog->getNome();

