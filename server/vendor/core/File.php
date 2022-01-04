<?php

namespace vendor\core;

use vendor\core\base\Singleton;

class File extends Singleton
{
    //private $filePath = PUB.'/files/file.txt';

    private $file;

    protected function __construct()
    {
        $config = require ROOT . '/config/config_file.php';
        $this->file = fopen(PUB . $config['txt'], 'a+');//
    }

    public function getFileContent()
    {
        $fileToArray = [];

        if ($this->file) {
            while (($buffer = fgets($this->file)) !== false) {
                if (trim($buffer) === '') {
                    continue;
                }
                $fileToArray[] = $buffer;
            }
        }

        return $fileToArray;
    }

    public function writeToFile($message)
    {
        return fwrite($this->file, $message . PHP_EOL);
    }


//    protected function __destruct()
//    {
//        fclose($this->file);
//    }
}