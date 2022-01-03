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
        $this->writeToFile();
    }

    public function read()
    {
        echo 'ARRAY';
        $array = (array) $this->openedFile;
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    public function writeToFile($message = 'default\n')
    {
        return fwrite($this->openedFile, $message);
    }


}
