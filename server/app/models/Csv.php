<?php

namespace app\models;

use \vendor\core\base\Model;
use vendor\core\base\Singleton;

class Csv extends Model
{
    public function __construct($r)
    {
        $this->openedFile = \vendor\core\Csv::getSingleton($r);
    }
}