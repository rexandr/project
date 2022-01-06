<?php

namespace vendor\core\base;
use vendor\core\Db;

abstract class Model
{
    protected $pdo;
    protected $table;
    protected $source; //???????????
    protected $filter = 'id';

    public function __construct()
    {
        $this->pdo = Db::getSingleton();
    }

    public function query($sql)
    {
        return $this->pdo->executeCreate($sql);
    }

    public function save($params)
    {
        $value = implode("','", $params);
        $keys = implode(",", array_keys($params));
        $sql = "INSERT $this->table ($keys) VALUES ('$value');";
        //echo $sql;
        
        if ($this->query($sql))
        {
            return true;
        }

        return false;

    }

    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->executeSelect($sql);
    }

    public function findOne($id, $field = '')
    {
        $field = $field?:$this->filter;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->executeSelect($sql, [$id]);
    }

    public function findByCustomSql($sql,$params = [])
    {
        return $this->pdo->executeSelect($sql, $params);
    }

    public function findByLike($str, $field, $table = '')
    {
        $table = $table?:$this->table;
        $sql = "SELECT * FROM $table WHERE $field LIKE ?";
        return $this->pdo->executeSelect($sql, ['%'.$str.'%']);
    }

}