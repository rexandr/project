<?php

namespace app\controllers;

use \vendor\core\base\Controller;
use app\models\File;

class FileController extends Controller
{

    public function indexAction()
    {


        $file = new File();

        $content = $file->read();

        foreach ($content as $kay)
        {
            echo $kay.'<br>';
        }

//        echo '<pre>';
//        print_r($file->getFileContent());
//        echo '</pre>';
        //$file->writeToFile('test from controller');
        $this->set(compact('file'));
        //return true;
    }

}