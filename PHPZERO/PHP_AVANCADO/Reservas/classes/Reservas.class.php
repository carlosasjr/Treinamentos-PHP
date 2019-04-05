<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace phpAvancado;

class Reservas
{
    /** @var \PDO * */
    private $pdo;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getReservas($data_inicio, $data_fim)
    {
        $array = array();

        $sql = 'SELECT * FROM reservas WHERE (data_inicio >= :data_inicio
                     AND data_fim <= :data_fim) ';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':data_inicio', $data_inicio);
        $sql->bindValue(':data_fim', $data_fim);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public static function converterDate($date)
    {
        $data = explode('/', $date);
        $data = $data[2] . '-' . $data[1] . '-' . $data[0];

        return $data;
    }

    public function verificarDisponibilidade($carro, $data_inicio, $data_fim)
    {
        $sql = "SELECT * FROM reservas WHERE id_carro = :carro AND ( NOT ( data_inicio > :data_fim OR data_fim < :data_inicio ) )";

        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':carro', $carro);
        $sql->bindValue(':data_inicio', $data_inicio);
        $sql->bindValue(':data_fim', $data_fim);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return false;
        }

        return true;
    }

    public function countReservas($data)
    {
       /* $sql = 'SELECT * FROM reservas WHERE (data_inicio <= :data_fim
                     and data_fim >= :data_inicio)';*/

        $sql = "SELECT * FROM reservas WHERE ( NOT ( data_inicio > :data_fim OR data_fim < :data_inicio ) )";


        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':data_inicio', $data);
        $sql->bindValue(':data_fim', $data);
        $sql->execute();

        return $sql->rowCount();
    }


    public function reservar($data)
    {
        $carro = $data['carro'];
        $data_inicio = $this->converterDate($data['data_inicio']);
        $data_fim = $this->converterDate($data['data_fim']);
        $nome = $data['nome'];

        $sql = 'INSERT INTO reservas (id_carro, data_inicio, data_fim, pessoa) VALUES (:id_carro, :data_inicio, :data_fim, :pessoa)';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id_carro', $carro);
        $sql->bindValue(':data_inicio', $data_inicio);
        $sql->bindValue(':data_fim', $data_fim);
        $sql->bindValue(':pessoa', $nome);

        $sql->execute();
    }
}
