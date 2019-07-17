<?php

//antes do php 7

class Carro
{
    public function getName()
    {
        return "Carro 1.0";
    }
}

$carro = new Carro();
echo $carro->getName();

//no php 7 com classe anonima

$carro = new class
{
    public function getName()
    {
        return "Carro 2.0";
    }
};

echo $carro->getName();

//retornar uma classe anônima
function criarCarro()
{
    return new class
    {
        public function getName()
        {
            return "Carro 3.0";
        }
    };
}

$carro = criarCarro();
echo $carro->getName();


//passar uma classe anônima como parâmetro
class Automovel
{
    private $carro;

    public function setCarro($carro)
    {
        $this->carro = $carro;
    }

    public function getName()
    {
        return $this->carro->getName();
    }
}

class Carro4
{
    public function getName()
    {
        return "Carro 4.0";
    }
}
$carro = new Carro4();
$a = new Automovel();
$a->setCarro($carro);
echo $a->getName();

//no php 7

$a->setCarro(new class {
    public function getName() {
        return "Carro 5.0";
    }
});
echo $a->getName();









