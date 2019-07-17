<?php

//função com o nome da classe não roda mais como construtor no php 7
//usar o __construct()

//métodos não statics não podem ser chamados estaticamente

//usar desta forma
//Ex:
class Carro
{
    public static function rodar()
    {
        echo "rodou";
    }
}


echo  Carro::rodar();