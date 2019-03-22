<?php

namespace OOP\Post;

class Post
{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtComentarios;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        if (!is_string($titulo) && strlen($titulo) < 5) {
            throw new Exception('Título inválido');
        }
        $this->titulo = $titulo;
    }

    public function addComentario($msg)
    {
        $this->comentarios[] = $msg;
        $this->contarComentario();
    }

    public function getCountComentarios()
    {
        return $this->qtComentarios;
    }

    private function contarComentario()
    {
        $this->qtComentarios = count($this->comentarios);
    }
}

$post = new Post();
$post->addComentario("Teste1");
$post->addComentario("Teste2");
$post->addComentario("Teste3");

echo 'Qtd de Comentário: ' . $post->getCountComentarios();
