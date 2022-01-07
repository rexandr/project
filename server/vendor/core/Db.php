<?php

namespace vendor\core;

use vendor\core\base\Singleton;//handmade

class Db extends Singleton//handmade
{
    protected $pdo;

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

    //operate query with create, alter, drop command
    public function executeCreate($sql, $params = [])
    {
        //prepare sql query
        $stmt = $this->pdo->prepare($sql);
        //commit sql and return true or false
        return $stmt->execute($params);
    }

    public function executeSelect($sql, $params = [])
    {
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