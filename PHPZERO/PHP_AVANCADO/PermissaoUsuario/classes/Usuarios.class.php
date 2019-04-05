<?php

/**
 * .class [ USUARIOS ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Usuarios
{
    /** @var PDO */
    private $pdo;
    private $id;
    private $permissoes;
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    private function setPermissoes()
    {
        $sql = "SELECT permissoes FROM usuarios where id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $this->id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $this->permissoes = explode(',', $sql['permissoes']);
        }
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

            $_SESSION['logado'] = $sql['id'];

            return true;
        }

        return false;
    }

    public function setUsuario($id)
    {
        $this->id = $id;

        $this->setPermissoes();
    }

    public function getPermissoes()
    {
        return $this->permissoes;
    }

    public function temPermissao($p)
    {
        if (!in_array($p, $this->permissoes)) {
            return false;
        }

        return true;
    }
}