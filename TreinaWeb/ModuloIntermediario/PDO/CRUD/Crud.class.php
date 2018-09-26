<?php

/**
 * Crud.class [ CRUD ]
 * Classe responsável pela CONEXÃO, SELECT, DELETE E UPDATE
 * @copyright (c) 2018, Carlos Junior
 */
class Crud extends PDO {

    public function __construct($fetchModde = PDO::FETCH_ASSOC) {
        $dsn = 'mysql:dbname=treinaweb;host=localhost;charset=utf8';
        $user = 'root';
        $password = '123';


        parent::__construct($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => $fetchModde,
            PDO::ATTR_PERSISTENT => true
        ]);
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVATES ***************** */
    /*     * ************************************************ */

    private function bindPlaces(&$sth, $data) {
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function Select($sql, array $places = []) {
        $sth = $this->prepare($sql);
        $this->bindPlaces($sth, $places);
        $sth->execute();
        return $sth->fetchAll();
    }

    public function Insert($table, $data) {
        $Fileds = implode(', ', array_keys($data));
        $Places = ':' . implode(', :', array_keys($data));
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', $table, $Fileds, $Places);

        $sth = $this->prepare($sql);
        $this->bindPlaces($sth, $data);
        $sth->execute();

        return $this->lastInsertId();
    }
    
    public function Update($table, $data) {
        
    }

    public function Delete($table, $where, $limit = 1) {
        $sql = sprintf('DELETE FROM %s WHERE %s LIMIT %S', $table, $where, $limit);
        return $this->exec($sql);
    }

}
