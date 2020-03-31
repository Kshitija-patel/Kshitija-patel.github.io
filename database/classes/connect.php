<?php

class Database
{
    
    private static $user = 'HPeujBoKAW';
    private static $password = 'nZWeghZ0P9';
    private static $dsn = 'mysql:host=remotemysql.com;dbname=HPeujBoKAW;port=3306';
    private static $dbcon;

    public function __construct()
    {

    }

    public static function getDb()
    {
        if (!isset(self::$dbcon)) {
            try {
                self::$dbcon = new \PDO(self::$dsn, self::$user, self::$password);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                echo $msg;
                exit();
            }
        }
        return self::$dbcon;
    }

}


