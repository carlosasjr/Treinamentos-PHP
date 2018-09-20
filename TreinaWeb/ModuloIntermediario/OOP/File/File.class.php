<?php

/**
 * File.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class File {

    protected $handle;

    public function __construct($arquivo) {
        $this->handle = fopen($arquivo, 'w+');
    }
    
    public function escrever($texto) {
        fwrite($this->handle, $texto);
    }
    
    public function __destruct() {
        fclose($this->handle);
    }
   

}
