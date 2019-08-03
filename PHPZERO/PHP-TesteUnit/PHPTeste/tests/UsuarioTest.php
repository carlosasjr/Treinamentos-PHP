<?php

use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    public function testExpectNomeCompleto()
    {
        $this->expectOutputString('Carlos Junior');

        $usuario = new Usuario();
        $usuario->setNome('Carlos');
        $usuario->setSobrenome('Junior');
        echo $usuario->getNomeCompleto();
    }

    public function testIdade()
    {

        $usuario = new Usuario();
        $usuario->setIdade(90);
        $this->assertEquals(90, $usuario->getIdade());

        //$this->markTestIncomplete('Falta implementar este teste com get e set da idade');
    }

    public function testIdadeString()
    {
        $usuario = new Usuario();
        $usuario->setIdade(90);
        $this->assertEquals('90 anos', $usuario->getIdade(true));


        //$this->markTestIncomplete('Falta criar o método na classe');

    }

}