<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace Pessoa;

class TPessoa
{
    /* Função publica */
    public function trocarSenha($senhaAtual, $novoSenha)
    {
        //conectar ao banco
        self::conectarAoBanco();
        //verifica se a senha atual está correta.

        //trocar senha
    }

    /* Função privada */
    private function conectarAoBanco()
    {
    }

    /* Função Protegida */
    protected function algumaCoisa()
    {
    }
}
