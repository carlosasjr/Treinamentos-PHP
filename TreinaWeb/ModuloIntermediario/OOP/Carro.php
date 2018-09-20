<?php

class Carro {
    protected $marca;
    public $modelo;
    public $qtdPortas;
    public $cor;
    public $ano;
    
    
    public function Acelerar(){
        echo 'Acelerando o carro' . '<br>';
    }
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    
    public function getMarca() {
        return $this->marca;
    }



}

$i30 = new Carro();

$i30->setMarca('Hyndai');
$i30->ano = 2018;
$i30->modelo = 'i30';

$gol = new Carro();
$gol->ano = 2018;
$gol->cor = 'Branco';
$gol->setMarca('GM');
$gol->modelo = 'Gol';
$gol->qtdPortas = 4;

$gol->Acelerar();

echo "A marca do meu gol é " . $gol->getMarca();

var_dump($i30, $gol);
