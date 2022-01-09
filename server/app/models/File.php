<?php

namespace app\models;

use \vendor\core\base\Model;
use vendor\core\base\Singleton;

class File extends Model
{
    public function __construct($r)
    {
        $this->openedFile = \vendor\core\File::getSingleton($r);
    }
}