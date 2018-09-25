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
    
    public function Select($sql, array $places = []) {
        $stdm = $this->prepare($sql);
        foreach ($places as $key => $value) {
            $stdm->bindParam(":$key", $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }
        
        $stdm->execute();
        
        return $stdm->fetchAll();
        
        
    }
    

}
