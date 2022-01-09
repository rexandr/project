<?php

namespace app\models;

use vendor\core\base\Model;

class User extends Db
{
    public $table = 'users';
    protected $filter = 'name';
}