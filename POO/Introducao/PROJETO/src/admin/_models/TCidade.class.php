<?php

/**
 * TCidade.class [ CIDADE ]
 * Classe responsável por cadastras as cidades
 * @copyright (c) 2018, Carlos Junior
 */
class TCidade
{
    private $id;
    private $nome;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function __construct($id)
    {
        if (isset($id)) :
            $this->id = (int)$id;

            $criterio = new TCriterio();
            $criterio->add(new TFilter('id', '=', $this->id));

            $cid = new TSQLSelect('cidades', $criterio);
            $cid->Execute();

            if ($cid->getResult()) :
                $this->setNome($cid->getResult()[0]['nome_cidade']);
            endif;
        endif;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}
