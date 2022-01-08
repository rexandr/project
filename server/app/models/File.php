<?php

namespace app\models;

use \vendor\core\base\FileModel;
use vendor\core\base\Singleton;

class File extends FileModel
{
    public function __construct($r)
    {
        parent::__construct($r);
    }
}