<?php

namespace vendor\core;

use vendor\core\base\Singleton;

class File extends Singleton
{
    private $file;

    protected function __construct()
    {
//        $this->file = file(PUB.'/files/file.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

//       $this->file = file_get_contents(PUB.'/files/file.txt');
       $this->file = fopen(PUB.'/files/file.txt', 'a+');

    }


    public function getFileContent()
    {
        return $this->file;

    }

    public function writeToFile($message = 'default\n')
    {
        return fwrite($this->file, $message);
    }


//    protected function __destruct()
//    {
//        fclose($this->file);
//    }
}