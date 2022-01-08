<?php

namespace vendor\core;

use vendor\core\base\Singleton;//handmade

class Db extends Singleton//handmade
{
    protected $pdo;

    //create connection
    protected function __construct()
    {
        //take config data
        if (isset($_SESSION['config']))
        {
            $config = $_SESSION['config'];
        }else{
            $config = require ROOT . '/config/config_db.php';
        }
        //echo $r = 'mysql:host='.$config['host'].':'.$config['port'].';dbname='.$config['db'].';charset=utf8',$config['user'],$config['pass'];

        //create connection
        $this->pdo = new \PDO('mysql:host='.$config['host'].':'.$config['port'].';dbname='.$config['db'].';charset=utf8',$config['user'],$config['pass'],[
            \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC,  //transfer only assoc data from all queries
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,      //show all errors from DB
        ]);  //options

//        echo $r = $config['dsn'],$config['user'],$config['pass'];
//        $this->pdo = new \PDO($config['dsn'],$config['user'],$config['pass'],$config['options']);
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