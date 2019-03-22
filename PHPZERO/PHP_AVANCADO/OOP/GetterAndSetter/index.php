<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 12/03/2019
 * Time: 17:31
 */

class Post
{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        if (!is_string($titulo) &&  strlen($titulo) < 5) {
           throw new Exception('Título inválido');
        }
        $this->titulo = $titulo;
    }
}

$post = new Post();
$post->setTitulo('teste de titulo');

echo "Titulo: {$post->getTitulo()}";

?>
