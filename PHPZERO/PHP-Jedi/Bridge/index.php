<?php

interface APIDesenho
{
    public function desenharCirculo($x, $y, $radio);
}

class APIDesenho1 implements APIDesenho
{
    public function desenharCirculo($x, $y, $radio)
    {
        echo "Desenho 1 " . $x . ' ' . $y . ' ' . $radio;
    }
}

class APIDesenho2 implements APIDesenho
{
    public function desenharCirculo($x, $y, $radio)
    {
        echo "Desenho 2 " . $x . ' ' . $y . ' ' . $radio;
    }
}

abstract class Formas
{
    protected $api;
    protected $x;
    protected $y;

    public function __construct(APIDesenho $api)
    {
        $this->api = $api;
    }
}

class Circulo extends Formas
{
    protected $radio;

    public function __construct($x, $y, $radio, APIDesenho $api)
    {
        parent::__construct($api);
        $this->x = $x;
        $this->y = $y;
        $this->radio = $radio;
    }

    public function desenhar()
    {
        $this->api->desenharCirculo($this->x, $this->y, $this->radio);
    }
}

$circulo = new Circulo(10, 20, 70, new APIDesenho2());
$circulo->desenhar();

