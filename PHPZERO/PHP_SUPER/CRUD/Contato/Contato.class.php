<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace CRUD;

use PDO;
use PDOException;

class Contato
{
    private $pdo;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    private function existeEmail($email)
    {
        $sql = "SELECT email FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email, PDO::PARAM_STR);
        $sql->execute();

        if ($sql->rowCount() == 0) {
            return false;
        }

        return true;
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:dbname=crudoo;host=localhost", "root", '');
        } catch (PDOException $e) {
            echo 'Falhou: ' . $e->getMessage();
        }
    }

    public function adicionar($email, $nome = null)
    {
        //1 - Verifica se o e-mail já existe no sistema
        //2 - adicionar

        if ($this->existeEmail($email)) {
            return false;
        }

        $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";

        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $nome, PDO::PARAM_STR);
        $sql->bindValue(':email', $email, PDO::PARAM_STR);

        $sql->execute();

        return true;
    }

    public function getID($id)
    {
        $sql = "SELECT id, nome, email FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        $sql->execute();

        if ($sql->rowCount() == 0) {
            return '';
        }

        $info = $sql->fetch();
        return $info;
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM contatos';
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() == 0) {
            return array();
        }

        return $sql->fetchAll();
    }

    public function editar($id, $nome, $email)
    {
        if ($this->existeEmail($email)) {
            return false;
        }


        $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        $sql->bindValue(':nome', $nome, PDO::PARAM_STR);
        $sql->bindValue(':email', $email, PDO::PARAM_STR);
        $sql->execute();

        return true;
    }

    public function excluir($id)
    {
        $sql = 'DELETE FROM contatos WHERE id = :id';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        $sql->execute();

        return true;
    }
}
