<?php


namespace frameworkVendor\core\base;


use frameworkVendor\core\Db;

abstract class Model
{
    protected $pdo;
    protected $table;
    protected $pKey = 'id';

    public function __construct()
    {
        $this->pdo = Db::instance();
    }

    public function query($sql)
    {
        return $this->pdo->execute($sql);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

    public function findOne($id, $field = '')
    {
        $field = $field ?: $this->pKey;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->query($sql, [$id]);
    }

    public function findSQL($sql, $params = [])
    {
        return $this->pdo->query($sql, $params);
    }

    public function findLike($str, $field, $table='')
    {
        $table = $table ?: $this->table;
        $sql = "SELECT * FROM $table WHERE $field = ?";
        return $this->pdo->query($sql, [ $str ]);
    }

    public function insertOne($id, $email, $pass)
    {
//        $field = $field ?: $this->pKey;
//        dd($field);
        $sql = "INSERT INTO users (id, email, pass) values('2', 'TestUser', '123456')";
        return $this->pdo->query($sql, [$id]);
    }

}