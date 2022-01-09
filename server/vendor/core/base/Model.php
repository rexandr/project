<?php

namespace vendor\core\base;
use vendor\core\Db;
use vendor\core\interfaces\DataAction;

abstract class Model implements DataAction
{
    public function read()
    {
        return $this->openedFile->getFileContent();
    }

    public function write($message)
    {
        $this->openedFile->writeToFile($message);
    }

}