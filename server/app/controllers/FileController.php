<?php

namespace app\controllers;

use \vendor\core\base\Controller;
use app\models\File;

class FileController extends Controller
{

    public function indexAction()
    {
        $file = new File();

        $fileContent = $file->read();

        if($_POST)
        {
            $file->write($_POST);
            header("Location:/file");
        }

        $this->set(compact('fileContent'));

    }

}