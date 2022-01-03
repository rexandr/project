<?php

namespace vendor\core\base;
use vendor\core\Db;

abstract class Model
{
    protected $pdo;
    protected $table;
    protected $filter = 'id';

    public function __construct()
    {
        $this->pdo = Db::getSingleton();
        //$this->pdo = Db::getSingletone(); //old
    }

    public function query($sql)
    {
        return $this->pdo->executeCreate($sql);
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