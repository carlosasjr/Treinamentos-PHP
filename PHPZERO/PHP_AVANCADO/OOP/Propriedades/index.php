<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 11/03/2019
 * Time: 17:46
 */

namespace OOP\Cachorro;

class Cachorro
{
    private $nome;
    private $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome()
    {
        return $this->nome;
    }
}


$bilu = new Cachorro('Bilu', 2);
echo "O nome do meu cachorro é: " . $bilu->getNome();

?>

