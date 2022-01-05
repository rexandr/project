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

    public function read(): array
    {
        return $this->openedFile->getFileContent();
    }

    public function write($message = ['Vasya', 'Pupkin'])
    {
       $this->openedFile->writeToFile($message);
    }




}
