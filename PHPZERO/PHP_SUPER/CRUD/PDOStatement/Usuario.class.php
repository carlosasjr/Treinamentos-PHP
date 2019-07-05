<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Usuario
{

    private $db;
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __construct()
    {
        try {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
            ];

            $this->db = new PDO('mysql:dbname=blog;host=localhost', 'root', '', $options);
        } catch (PDOException $e) {
            echo 'Falha: ' . $e->getMessage();
        }
    }

    public function selecionar($id)
    {
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        $sql->execute();

        $array = array();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }

    public function inserir($nome, $email, $senha)
    {
        $sql = $this->db->prepare('INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha');

        $sql->bindParam(':nome', $nome);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':senha', $senha);

        $senha = md5($senha);

        $sql->execute();
    }

    public function atualizar($nome, $email, $senha, $id)
    {
        $sql = $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ? ");


        $sql->execute(array(
            $nome,
            $email,
            md5($senha),
            $id
        ));
    }

    public function deletar($id)
    {
        $sql = $this->db->prepare('DELETE FROM usuarios WHERE id = ?');
        $sql->bindValue(1, $id);
        $sql->execute();
    }

}