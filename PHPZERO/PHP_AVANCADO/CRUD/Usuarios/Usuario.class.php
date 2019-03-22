<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace CRUDD\Usuarios;

use PDO;
use PDOException;

class Usuario
{
    private $id;
    private $email;
    private $senha;
    private $nome;

    private $pdo;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    private function conectar()
    {
        try {
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            $this->pdo = new PDO("mysql:dbname=usuarios;host=localhost", 'root', '', $options);

        } catch (PDOException $e) {
            echo 'Falhou: ' . $e->getMessage();
        }
    }


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __construct($id = null)
    {
        $this->conectar();

        if (!empty($id)) {
            $sql = 'SELECT * FROM usuarios WHERE id = :id';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id', $id, PDO::PARAM_INT);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $data = $sql->fetch();

                $this->id = $data['id'];
                $this->email = $data['email'];
                $this->senha = $data['senha'];
                $this->nome = $data['nome'];
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = md5($senha);
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function salvar()
    {
        if (!empty($this->id)) {
            $sql = 'UPDATE usuarios SET email = :email, senha = :senha, nome = :nome WHERE id = :id';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $this->email, PDO::PARAM_STR);
            $sql->bindValue(':senha', $this->senha, PDO::PARAM_STR);
            $sql->bindValue(':nome', $this->nome, PDO::PARAM_STR);
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->execute();
        } else {
            $sql = 'INSERT INTO usuarios SET email = :email, senha = :senha,nome = :nome';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $this->email, PDO::PARAM_STR);
            $sql->bindValue(':senha', $this->senha, PDO::PARAM_STR);
            $sql->bindValue(':nome', $this->nome, PDO::PARAM_STR);
            $sql->execute();
        }
    }

    public function delete()
    {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
        $sql->execute();
    }

}
