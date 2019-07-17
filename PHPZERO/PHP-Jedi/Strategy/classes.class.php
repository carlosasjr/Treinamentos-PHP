<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
interface OutPutInterface
{
    public function load($array);
}

class JsonOutPut implements OutPutInterface
{
    public function load($array)
    {
        return json_encode($array);
    }
}

class ArrayOutPut implements OutPutInterface
{
    public function load($array)
    {
        return $array;
    }
}

class Produto
{
    private $array;
    private $output;

    public function getList()
    {
        $this->array = array(
            array("id" => 1, "nome" => 'Carlos'),
            array("id" => 2, "nome" => 'Maria')
        );
    }

    public function setOutPut(OutPutInterface $output)
    {
        $this->output = $output;
    }

    public function getOutPut()
    {
        return $this->output->load($this->array);
    }
}