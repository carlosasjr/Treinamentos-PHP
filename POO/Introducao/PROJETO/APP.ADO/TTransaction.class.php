<?php

/**
 * TConn.class [ TRANSAÇÃO ]
 * Classe final de Transação.
 * Inicia uma transação no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */
final class TTransaction  {
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    /** @var PDO */
    private static $Conn; //Conexão Ativa
    
    /** @var TLogger */
    private static $Logger; //Objeto de LOG

    /* Método __construct()
     * Está declarado como private para impedir que se crie instância de TTransaction
     */

    private function __construct() {
        
    }
    
    private function __clone() {
        
    }

    function __wakeup() {
        
    }    

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public static function Open() {
        if (empty(self::$Conn)):
            self::$Conn = TConn::getInstance();
            self::$Conn->beginTransaction();
            self::$Logger = NULL;
        endif;
    }

    public static function Rollback() {
        if (self::$Conn):            
            self::$Conn->rollBack();
            self::$Conn = NULL;
        endif;
    }

    public static function Close() {
        if (self::$Conn):
            self::$Conn->commit();
            self::$Conn = NULL;
        endif;
    }
    
    public static function setLogger(TLogger $logger) {
        self::$Logger = $logger;
    }
    
    public static function Log($message){
        //verifica se existe um logger
        if (self::$Logger):
            self::$Logger->write($message);
        endif;
    }
    
    

}
