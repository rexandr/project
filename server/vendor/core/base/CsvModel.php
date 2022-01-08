<?php

namespace vendor\core\base;

use vendor\core\Csv;

abstract class CsvModel
{
    protected $openedFile;

    public function __construct($r)
    {
        $this->openedFile = Csv::getSingleton($r);
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