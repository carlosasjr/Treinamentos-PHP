<?php

/**
 * TConn.class [ TRANSAÇÃO ]
 * Classe final de Transação.
 * Inicia uma transação no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */
final class TTransaction extends TConn {
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    /** @var PDO */
    private static $Conn;

    /* Método __construct()
     * Está declarado como private para impedir que se crie instância de TTransaction
     */

    private function __construct() {
        
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public static function Open() {
        if (empty(self::$Conn)):
            self::$Conn = parent::getConn();            
        endif;
        
        self::$Conn->beginTransaction();
    }

    public static function Get() {
        return self::$Conn;
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

}
