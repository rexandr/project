<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\File;

class FileController extends AppController
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