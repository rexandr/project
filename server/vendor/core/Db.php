<?php

namespace vendor\core;

use vendor\core\base\Singleton;//handmade

class Db extends Singleton//handmade
{
    protected $pdo;

    //protected static $connect;

    public static $countSql = 0;
    public static $queries = [];

    //create connection
    protected function __construct()
    {
        //take config data
        $config = require ROOT . '/config/config_db.php';
        //create connection
        $this->pdo = new \PDO($config['dsn'],$config['user'],$config['pass'],$config['options']);
    }

//    //check connection and return if exist or create new
//    public static function getSingletone()
//    {
//        //check if exist
//        if (self::$connect === null)
//        {
//            //create new
//            self::$connect = new self();
//        }
//        //return connection
//        return self::$connect;
//    }

    //operate query with create, alter, drop command
    public function executeCreate($sql, $params = [])
    {
        //increase number of queries after each
        self::$countSql++;
        //save every executed query
        self::$queries = $sql;
        //prepare sql query
        $stmt = $this->pdo->prepare($sql);
        //commit sql and return true or false
        return $stmt->execute($params);
    }

    public function executeSelect($sql, $params = [])
    {
        //increase number of queries after each
        self::$countSql++;
        //save every executed query
        self::$queries = $sql;
        //prepare sql query
        $stmt = $this->pdo->prepare($sql);
        //commit sql and return true or false
        $res =  $stmt->execute($params);
        //if $res true there are some data which should be returned
        if ($res !== false)
        {
            return $stmt->fetchAll();
        }
        //if $res false there no data and return empty array
        return [];
    }
}