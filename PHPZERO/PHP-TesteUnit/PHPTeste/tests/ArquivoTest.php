<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */


use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{


    public function testFalhaInclude()
    {
        $this->expectException(\PHPUnit\Framework\Error::class);
        include 'config.php';
    }

    public function testInclude()
    {
        $this->assertTrue(
            file_exists('config.php')
        );
    }
}