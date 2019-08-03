<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

use \PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /** @dataProvider somaDataProvider **/
    public function testSoma($n1, $n2, $esperado)
    {
        $cal = new Calculadora();
        $this->assertEquals($esperado, $cal->soma($n1, $n2));
    }

    public function somaDataProvider()
    {
        return array(
          array(1, 1, 2),
          array(20, 10, 30),
          array(-100, 30, -70),
          array(10.5, 0.5, 11),
        );
    }

}