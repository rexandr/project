<?php
namespace vendor\core\base;
use vendor\core\File;

abstract class FileModel
{
    protected $openedFile;

    public function __construct()
    {
        $this->openedFile = File::getSingleton();
    }

    public function read()
    {
        return $this->openedFile->getFileContent();
    }

    public function write($message = 'default')
    {
       $this->openedFile->writeToFile($message);
    }




}
