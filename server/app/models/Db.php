<?php

namespace app\models;

use vendor\core\base\Model;

class Db extends Model
{
    public $table = 'test';
    protected $filter = 'id';

    public function __construct()
    {
        $this->pdo = \vendor\core\Db::getSingleton();
    }

    public function query($sql)
    {
        return $this->pdo->executeCreate($sql);
    }

    public function write($params)
    {
        $value = implode("','", $params);
        $value = htmlspecialchars($value);
        $keys = implode(",", array_keys($params));
        $sql = "INSERT $this->table ($keys) VALUES ('$value');";

        if ($this->query($sql))
        {
            return true;
        }

        return false;

    }

    public function update($field, $value, $where, $filter)
    {
        $sql = "UPDATE $this->table SET $field = '$value' WHERE $where = '$filter';";
        echo $sql.'<br>';
        if ($this->query($sql))
        {
            return true;
        }

        return false;
    }

    public function read()//findAll
    {
        $sql = "SELECT * FROM {$this->table}";
        $lines = [];
        foreach ($this->pdo->executeSelect($sql) as $line)
        {
            $lines [] = 'Data From Db - ' . implode('_', $line);
        }
        return $lines;
    }

    public function findOne($id, $field = '')
    {
        $field = $field?:$this->filter;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->executeSelect($sql, [$id]);
    }

//    public function findByCustomSql($sql,$params = [])
//    {
//        return $this->pdo->executeSelect($sql, $params);
//    }

//    public function findByLike($str, $field, $table = '')
//    {
//        $table = $table?:$this->table;
//        $sql = "SELECT * FROM $table WHERE $field LIKE ?";
//        return $this->pdo->executeSelect($sql, ['%'.$str.'%']);
//    }
}