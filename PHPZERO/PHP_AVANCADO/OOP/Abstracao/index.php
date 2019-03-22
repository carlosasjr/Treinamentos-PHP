<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 14/03/2019
 * Time: 16:20
 */

abstract class Animal
{
    public $nome;
    private $idade;

    abstract protected function andar();
}

class Cavalo extends Animal
{
    private $quantidadeDePatas;
    private $tipoPelo;

    public function andar()
    {
        echo "Andou";
    }

}

$pangare = new Cavalo();
$pangare->nome = 'Paganre bravo';

echo 'O Nome do cavalo é: ' . $pangare->nome;

