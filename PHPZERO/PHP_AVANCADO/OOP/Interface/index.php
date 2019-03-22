<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 14/03/2019
 * Time: 17:00
 */

interface Animal {

    public function andar();
}

class Cachorro implements Animal {

  public function andar()
  {
      echo "Estou andando";
  }
}

$cachorro = new Cachorro();
$cachorro->andar();


