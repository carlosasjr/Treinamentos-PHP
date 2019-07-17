<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace Models;

use Core\Model;

class Fotos extends Model
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getFotos()
    {
        $array = array();

        $sql = 'SELECT * FROM fotos ORDER BY id DESC';

        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function saveFotos()
    {

        if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {

            $permitidos = array('image/jpeg', 'image/jpg', 'image/png');

            if (in_array($_FILES['arquivo']['type'], $permitidos)) {
                $nome = md5(time() . rand(0, 999)) . '.jpg';

                move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/images/galeria/' . $nome);

                $titulo = null;

                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


                if ($dados && !empty($dados['titulo'])) {
                    $titulo = $dados['titulo'];
                }

                $sql = 'INSERT INTO fotos (titulo, url) VALUES (:titulo, :url)';
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':titulo', $titulo);
                $sql->bindValue(':url', $nome);
                $sql->execute();

                $result['titulo'] = $titulo;
                $result['url'] = $nome;

                echo json_encode($result);

            }
        }
    }
}