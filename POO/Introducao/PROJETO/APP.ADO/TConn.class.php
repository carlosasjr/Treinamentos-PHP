<?php

/**
 * TConn.class [ CONEXÃO ]
 * Classe abstrata de conexão. Padrão SingleTon.
 * Retorna um objeto PDO pelo método estático getConn();
 * @copyright (c) 2018, Carlos Junior
 */
abstract class TConn {

    private static $Host = HOST;
    private static $User = USER;
    private static $Pass = PASS;
    private static $Dbsa = DBSA;
    private static $Type = TYPE;

    /** @var PDO */
    private static $Connect = null;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    /**
     * Conecta com o banco de dados com o pattern singleton.
     * Retorna um objeto PDO!
     */
    private static function Conectar() {
        try {
            if (self::$Connect == null) :
                switch (self::$Type) {
                    case 'mysql':
                        $dsn = 'mysql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
                        $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                        self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);
                        break;

                    case 'sqlite':
                        $dsn = 'sqlite:' . self::$Dbsa;
                        self::$Connect = new PDO($dsn);

                    case 'ibase':
                        $dsn = 'firebird:dbname=' . self::$Dbsa;
                        self::$Connect = new PDO($dsn, self::$User, self::$Pass);
                        break;
                    
                    default:
                        $dsn = 'mysql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
                        $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                        self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);
                        break;
                }


            endif;
        } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
        }

        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    /** Retorna um objeto PDO Singleton Pattern. */
    protected static function getConn() {
        return self::Conectar();
    }

}
