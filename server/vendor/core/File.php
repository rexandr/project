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
        
        
        foreach ($this->file as $kay)
        {
            echo $kay.'<br>';
        }
        $this->getFileContent();

    }


    public function getFileContent()
    {
//        foreach ($this->file as $kay)
//        {
//            echo $kay.'<br>';
//        }
//
       echo 'getFileContent()';
        foreach ($this->file as $kay)
        {
            echo $kay.'<br>';
        }
        echo '<pre>';
        var_dump($this->file);
        echo '</pre>';


        //return $this->file;
    }


//    protected function __destruct()
//    {
//        fclose($this->file);
//    }
}