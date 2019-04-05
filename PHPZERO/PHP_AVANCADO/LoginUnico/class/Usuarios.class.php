<?php

/**
 * .class [ USUARIOS ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace LoginUnico;

class Usuarios
{
    /** @var PDO */
    private $pdo;
    private $id;
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    private function setIP($ip)
    {
        $sql = "UPDATE usuarios SET ip = :ip WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':ip', $ip);
        $sql->bindValue(':id', $this->id);
        $sql->execute();
    }
    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fazerLogin($email, $senha)
    {
        $sql = 'SELECT * FROM usuarios WHERE email = :email AND senha = :senha';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $this->id = $sql['id'];
            $_SESSION['logado'] = $this->id;



            $ip = $_SERVER['REMOTE_ADDR'];
            $this->setIP($ip);

            return true;
        }

        return false;
    }

    public function ipLogado($id, $ip) {
        $sql = 'SELECT * FROM usuarios WHERE id = :id AND ip = :ip';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':ip', $ip);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        }

        return false;
    }
}
