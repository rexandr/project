<?php

namespace vendor\core\base;

use vendor\core\File;

abstract class FileModel
{
    protected $openedFile;

    public function __construct($r)
    {
        $this->openedFile = File::getSingleton($r);
    }

    public function read()
    {
        return $this->openedFile->getFileContent();
    }

    public function write($message = ['Vasya', 'Pupkin'])
    {
        $this->openedFile->writeToFile($message);
    }


}
