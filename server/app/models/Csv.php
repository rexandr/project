<?php

namespace app\models;

use \vendor\core\base\CsvModel;
use vendor\core\base\Singleton;

class Csv extends CsvModel
{
    public function __construct($r)
    {
        parent::__construct($r);
    }
}