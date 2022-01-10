<?php

namespace vendor\core;

use vendor\core\base\Singleton;

class File extends Singleton
{
    private $file;

    protected function __construct($filePath)
    {
        $this->file = fopen(PUB . $filePath, 'a+');

//        $config = require ROOT . '/config/config_file.php';
//        $this->file = fopen(PUB . $config['txt'], 'a+');//
    }

    public function getFileContent()
    {
        $fileToArray = [];
        $class = get_class($this);
        $res = explode("\\", $class);
        $index = array_pop($res);
        if ($this->file) {
            while (($buffer = fgets($this->file)) !== false) {
                if (trim($buffer) === '') {
                    continue;
                }
                $fileToArray[] = 'Data from - ' . $index . ' - ' . $buffer;
            }
        }

        return $fileToArray;
    }

    public function writeToFile($message)
    {
        $message = implode("_", $message);
        $message = htmlspecialchars($message);
        return fwrite($this->file, $message . PHP_EOL);
    }
}