<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Cache
{
    private $cache;
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    private function readCache($arquivo)
    {
        $this->cache = new stdClass();

        if (file_exists($arquivo)) {
            $this->cache = json_decode(file_get_contents($arquivo));
        }
    }

    private function saveCache($arquivo)
    {
        file_put_contents($arquivo, json_encode($this->cache));
    }


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function setVar($arquivo, $nome, $valor)
    {
        $this->readCache($arquivo);
        $this->cache->$nome = $valor;
        $this->saveCache($arquivo);
    }

    public function getVar($arquivo, $nome)
    {
        $this->readCache($arquivo);
        return $this->cache->$nome;
    }


}