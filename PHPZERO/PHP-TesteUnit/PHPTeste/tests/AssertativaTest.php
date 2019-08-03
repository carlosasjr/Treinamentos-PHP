<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

use PHPUnit\Framework\TestCase;

class AssertativaTest extends TestCase
{
    public function testArrayHasKey()
    {
        //assertArrayHasKey
        //Saber se um array tem determinada chave

        $a = new Assertativa();
        $array = $a->getArray();

        $this->assertArrayHasKey('nome', $array);
    }


    public function testCount()
    {
        //assertCount

        $a = new Assertativa();
        $array = $a->getArray();

        //passa a quantidade de campos do array
        $this->assertCount(2, $array);
    }

    public function testEmpty()
    {

        //assertEmpty

        $a = new Assertativa();
        $array = $a->getArray();

        //testa se o array esta vazio
        //vao dar erro se não estiver vazio
        $this->assertEmpty($array);
    }

    public function testContain()
    {
        //assertContains

        $array = array(1, 2, 3, 4, 5);

        //procura um valor no array
        $this->assertContains(5, $array);
    }

    public function testContainOnly()
    {
        //assertContainsOnly

        $array = array('Carlos');

        //procura se no array contem um tipo
        $this->assertContainsOnly('string', $array);
    }

    public function testAttributeExists()
    {
        //assertClassHasAttribute

        $a = new Assertativa();

        //verifica se o atributo existe
        $this->assertClassHasAttribute('numero', Assertativa::class);
    }

    public function testRegex()
    {
        //assertRegEx

        //testando se a string tem apenas 3 letras
        $this->assertRegExp('/^[a-z]{3}$/', 'bom');
    }


    //diretorios

    public function testDirExists()
    {
        $this->assertDirectoryExists('tests');
    }

    public function testDirPermission1()
    {
        //se o diretorio tem permissao de leitura
        $this->assertDirectoryIsReadable('tests');

        //se o diretorio tem permissao de escrita
        $this->assertDirectoryIsWritable('tests');
    }

    //arquivos

    //verificar se arquivo existe
    public function testFileExists()
    {
        $this->assertFileExists('config.php');
    }

    //verificar se arquivos são iguais
    public function testFileEquals()
    {
        $this->assertFileEquals('lista1.txt', 'lista2.txt');
    }


    //testa se o retorno é True
    public function testBoolean1()
    {
        $this->assertTrue(is_file('lista.txt'));
    }

    public function testBoolean2()
    {
        $this->assertFalse(is_file('lista.txt'));
    }

    public function testNull()
    {
        $idade = null;
        $this->assertNull($idade);
    }

    public function testVarType()
    {
        $a = new Assertativa();

        $this->assertInternalType('array', $a->getArray());
    }

    //verificar se é igual
    public function testEqual()
    {
        $nome = 'carlos';
        $this->assertEquals('carlos', $nome);
    }

    public function testString()
    {
        $texto = 'Carlos tem 90 anos';

        //string começa com...
        $this->assertStringStartsWith('Carl', $texto);

        //string terminou com...
        $this->assertStringEndsWith('anos', $texto);
    }

    public function testNumeros1()
    {
        $totalUsuarios = 10;

        //verifica se o primeiro numero é MAIOR que o segundo
        $this->assertGreaterThan(10, $totalUsuarios);

        //verifica se o primeiro numero é MAIOR ou IGUAL que o segundo
        $this->assertGreaterThanOrEqual(10, $totalUsuarios);
    }

    public function testNumeros2()
    {
        $totalUsuarios = 10;

        //verifica se o numero é menor que o segundo
        $this->assertLessThanOrEqual(10, $totalUsuarios);
    }
}
