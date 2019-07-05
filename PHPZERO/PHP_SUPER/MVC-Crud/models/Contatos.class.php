<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Contatos extends Model
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    private function emailExists($email)
    {
        $sql = "SELECT email FROM contatos WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        }

        return false;
    }


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getAll()
    {
        $array = array();

        $sql = "SELECT * FROM contatos";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function store($id, $nome, $email)
    {
        if (!empty($id)) {
            $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':id', $id);
            $sql->execute();

            return true;
        } else {
            if (!$this->emailExists($email)) {
                $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':nome', $nome);
                $sql->bindValue(':email', $email);
                $sql->execute();

                return true;
            }

            return false;
        }

        return false;
    }


    public function delete($id)
    {
        if (!$this->emailExists($email)) {
            $sql = "DELETE FROM contatos WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            return true;
        }

        return false;
    }

    public function getContatobyID($id)
    {
        $array = array();

        $sql = "SELECT * FROM contatos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }
}