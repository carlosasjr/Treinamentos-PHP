<?php

class Personagem
{
    private $propriedades;

    public function setPropriedades($nome, $valor)
    {
        $this->propriedades[$nome] = $valor;
    }

    public function getAllPropriedades()
    {
        return $this->propriedades;
    }
}


interface BuilderInterface
{
    public function createPersonagem();

    public function roupa();

    public function chapeu();

    public function sapato();

    public function getPersonagem();
}

class MarioBuilder implements BuilderInterface
{
    /** @var Personagem */
    private $personagem;

    public function createPersonagem()
    {
        $this->personagem = new Personagem();
    }

    public function roupa()
    {
        $this->personagem->setPropriedades('roupa', 'vermelha');
    }

    public function chapeu()
    {
        $this->personagem->setPropriedades('chapeu', 'caipira');
    }

    public function sapato()
    {
        $this->personagem->setPropriedades('peDireito', 'Branco');
        $this->personagem->setPropriedades('peEsquerdo', 'Branco');
    }

    public function getPersonagem()
    {
        return $this->personagem;
    }
}

//aqui posso criar outro personagem Builder


//A Classe Director se encarrega de criar o personagem e chamar todos os
//métodos para criar o personagem

class Director
{
    public function build(BuilderInterface $build)
    {
        $build->createPersonagem();
        $build->chapeu();
        $build->roupa();
        $build->sapato();
        return $build->getPersonagem();
    }
}

$mario = (new Director())->build(new MarioBuilder());
var_dump($mario->getAllPropriedades());


