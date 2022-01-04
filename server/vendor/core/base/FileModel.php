<?php
namespace vendor\core\base;
use vendor\core\File;

abstract class FileModel
{
    protected $openedFile;
    //protected $file = 'file.txt';

    public function __construct()
    {
        $this->openedFile = File::getSingleton();
        //$this->read();
    }

    public function write()
    {
       $this->openedFile->writeToFile();
    }




}
